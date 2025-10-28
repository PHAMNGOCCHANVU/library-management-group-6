<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhieuMuonChiTiet;
use App\Models\ThongBao;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\PhieuTra;

class BorrowReturnController extends Controller
{
    public function index(Request $request)
    {
        $query = PhieuMuonChiTiet::with(['phieuMuon.nguoiDung', 'sach'])
            ->whereHas('phieuMuon.nguoiDung', function ($q) {
                $q->where('vaiTro', 'reader'); // Chỉ lấy reader
            });

        // Lọc tìm kiếm
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('phieuMuon.nguoiDung', function ($q2) use ($search) {
                    $q2->where('hoTen', 'like', "%$search%");
                })
                    ->orWhereHas('sach', function ($q3) use ($search) {
                        $q3->where('tenSach', 'like', "%$search%");
                    })
                    ->orWhere('idPhieuMuon', 'like', "%$search%")
                    ->orWhere('trangThaiCT', 'like', "%$search%");
            });
        }

        $borrowReturns = $query->orderBy('created_at', 'desc')->get();

        return view('admin.borrow-return-management-admin', compact('borrowReturns'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'trangThaiCT' => 'required|in:pending,approved,rejected'
        ]);

        $item = PhieuMuonChiTiet::with(['phieuMuon.nguoiDung', 'sach'])->find($id);

        if (!$item) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy yêu cầu'], 404);
        }

        $item->trangThaiCT = $request->trangThaiCT;
        $item->save();

        if ($request->trangThaiCT === 'approved') {
            $userId = $item->phieuMuon->idNguoiDung;
            $sachTen = $item->sach->tenSach ?? 'Sách';

            ThongBao::create([
                'idNguoiDung' => $userId,
                'idSach' => $item->idSach,
                'idPhieuMuon' => $item->idPhieuMuon,
                'loaiThongBao' => 'Thông báo mượn sách',
                'noiDung' => "Yêu cầu mượn sách {$sachTen} đã được duyệt thành công!",
                'thoiGianGui' => now(),
                'trangThai' => 'unread'
            ]);
        } else if ($request->trangThaiCT === 'rejected') {
            $userId = $item->phieuMuon->idNguoiDung;
            $sachTen = $item->sach->tenSach ?? 'Sách';

            ThongBao::create([
                'idNguoiDung' => $userId,
                'idSach' => $item->idSach,
                'idPhieuMuon' => $item->idPhieuMuon,
                'loaiThongBao' => 'Thông báo mượn sách',
                'noiDung' => "Yêu cầu mượn sách {$sachTen} đã bị từ chối.",
                'thoiGianGui' => now(),
                'trangThai' => 'unread'
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }

    //br-rt -manage
    public function manageBorrowReturns(Request $request)
    {
        $query = PhieuMuonChiTiet::with(['phieuMuon.nguoiDung', 'sach'])
            ->whereHas('phieuMuon.nguoiDung', function ($q) {
                $q->where('vaiTro', 'reader');
            });

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('phieuMuon.nguoiDung', function ($q2) use ($search) {
                    $q2->where('hoTen', 'like', "%$search%");
                })
                    ->orWhereHas('sach', function ($q3) use ($search) {
                        $q3->where('tenSach', 'like', "%$search%");
                    })
                    ->orWhere('idPhieuMuon', 'like', "%$search%")
                    ->orWhere('trangThaiCT', 'like', "%$search%");
            });
        }

        if ($request->has('pending') && $request->pending == 1) {
            $query->where('trangThaiCT', 'pending');
        }

        $borrowReturns = PhieuMuonChiTiet::where('trangThaiCT', 'pending')
            ->with('phieuMuon', 'sach', 'phieuMuon.nguoiDung')
            ->get();
        return view('admin.borrow-return-management-admin', compact('borrowReturns'));
    }



    public function approveReturn(Request $request, $idChiTiet)
    {
        $status = $request->input('trangThaiCT', 'approved');

        $chiTiet = PhieuMuonChiTiet::with(['phieuMuon.nguoiDung', 'sach'])->findOrFail($idChiTiet);

        if ($chiTiet->trangThaiCT !== 'pending') {
            return response()->json(['success' => false, 'message' => 'Yêu cầu đã được xử lý trước đó.']);
        }

        DB::transaction(function () use ($chiTiet, $status) {
            if ($chiTiet->ghiChu === 'return' && $status === 'approved') {
                PhieuTra::create([
                    'idPhieuMuonChiTiet' => $chiTiet->idPhieuMuonChiTiet,
                    'ngayTra' => Carbon::today(),
                    'trangThaiXuLy' => 'processed',
                    'ghiChu' => 'Đã xử lý'
                ]);
            }

            $chiTiet->trangThaiCT = $status;
            $chiTiet->save();

            ThongBao::create([
                'idNguoiDung' => $chiTiet->phieuMuon->idNguoiDung,
                'idSach' => $chiTiet->idSach,
                'idPhieuMuon' => $chiTiet->idPhieuMuon,
                'loaiThongBao' => $chiTiet->ghiChu === 'borrow' ? 'Thông báo mượn sách' : 'Thông báo trả sách',
                'noiDung' => $status === 'approved' ?
                    "Yêu cầu trả sách {$chiTiet->sach->tenSach} đã được duyệt." :
                    "Yêu cầu trả sách {$chiTiet->sach->tenSach} đã bị từ chối.",
                'thoiGianGui' => now(),
                'trangThai' => 'unread'
            ]);
        });

        return response()->json(['success' => true, 'message' => 'Yêu cầu đã được cập nhật.']);
    }
}
