<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\DatCho;
use App\Models\Sach;
use App\Models\ThongBao;
use App\Models\NguoiDung;

class DatChoController extends Controller
{
    /**
     * Trang chính Đặt chỗ sách
     */
    public function index()
    {
        return view('user.datchosach');
    }

    /**
     * Nội dung Đặt chỗ của tôi (AJAX)
     */
    public function contentDatChoSach()
    {
        $user = Auth::user();

        if (!($user instanceof NguoiDung)) {
            abort(403, "Người dùng không hợp lệ hoặc chưa đăng nhập.");
        }

        $datChos = $user->datChos()->with('sach')->get();

        return view('user.content-datchosach', compact('datChos'));
    }

    /**
     * Nội dung Sách hot (AJAX)
     */
    public function contentSachHot()
    {
        $sachsHot = Sach::with('danhMuc')
            ->withCount('datChos')
            ->orderByDesc('dat_chos_count')
            ->take(10)
            ->get();

        return view('user.content-sachhot', compact('sachsHot'));
    }


    public function reserve($idSach)
    {
        $user = Auth::user();
        $userId = $user->idNguoiDung;
        $today = Carbon::today();
        $queueOrder = DB::table('dat_cho')->where('idSach', $idSach)->count() + 1;
        $expireDate = $today->copy()->addDays(14);

        $datChoId = DB::table('dat_cho')->insertGetId([
            'idNguoiDung' => $userId,
            'idSach' => $idSach,
            'ngayDat' => $today,
            'queueOrder' => $queueOrder,
            'status' => 'waiting',
            'thoiGianHetHan' => $expireDate,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $sach = Sach::find($idSach);
        ThongBao::create([
            'idNguoiDung' => $userId,
            'idSach' => $idSach,
            'idDatCho' => $datChoId,
            'loaiThongBao' => 'reserve',
            'noiDung' => "Bạn đã đặt chỗ sách {$sach->tenSach} thành công! Hết hạn: {$expireDate->format('d/m/Y')}",
            'thoiGianGui' => now(),
            'trangThai' => 'unread'
        ]);

        return response()->json(['message' => 'Bạn đã đặt chỗ sách thành công!']);
    }

    /**
     * Action Hủy đặt chỗ
     */
    public function cancel($idDatCho)
    {
        $user = Auth::user();
        $datCho = DatCho::where('idDatCho', $idDatCho)
            ->where('idNguoiDung', $user->idNguoiDung)
            ->first();

        if (!$datCho) {
            return response()->json(['message' => 'Không tìm thấy đặt chỗ.'], 404);
        }

        $datCho->status = 'cancel';
        $datCho->save();

        $sach = $datCho->sach;
        ThongBao::create([
            'idNguoiDung' => $user->idNguoiDung,
            'idSach' => $datCho->idSach,
            'idDatCho' => $idDatCho,
            'loaiThongBao' => 'cancel',
            'noiDung' => "Bạn đã hủy đặt chỗ sách {$sach->tenSach}.",
            'thoiGianGui' => now(),
            'trangThai' => 'unread'
        ]);

        return response()->json(['message' => 'Bạn đã hủy đặt chỗ sách thành công!']);
    }
}
