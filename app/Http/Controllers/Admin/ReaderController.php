<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReadersExport;


class ReaderController extends Controller
{
    /**
     * Hiển thị danh sách độc giả
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword', '');
        $readers = NguoiDung::where('vaiTro', 'reader')
            ->when($keyword, function($query, $keyword) {
                $query->where(function($q) use ($keyword) {
                    $q->where('idNguoiDung', 'like', "%$keyword%")
                      ->orWhere('hoTen', 'like', "%$keyword%")
                      ->orWhere('email', 'like', "%$keyword%");
                });
            })
            ->orderBy('idNguoiDung', 'asc')
            ->get();

        return view('admin.reader-management-admin', compact('readers'));
    }

    /**
     * Reset mật khẩu độc giả
     */
    public function resetPassword($id)
    {
        $reader = NguoiDung::find($id);

        if (!$reader || $reader->vaiTro !== 'reader') {
            return response()->json([
                'success' => false,
                'message' => 'Độc giả không tồn tại.'
            ]);
        }

        // Reset mật khẩu về mặc định "12345678"
        $reader->matKhau = Hash::make('12345678');
        $reader->save();

        return response()->json([
            'success' => true,
            'message' => 'Đã đặt lại mật khẩu thành công. Mật khẩu mặc định: 12345678'
        ]);
    }

    /**
     * Xuất danh sách độc giả ra Excel
     */
    public function export()
    {
        return Excel::download(new ReadersExport, 'danh_sach_doc_gia.xlsx');
    }
}
