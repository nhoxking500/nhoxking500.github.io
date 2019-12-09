<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    public function index()
    {
    	$dsNguoiChoi=NguoiChoi::all();
    	return view('nguoichoi',compact('dsNguoiChoi'));
    }
     public function suaNguoiChoi($id)
    {
    	$dsNguoiChoi=NguoiChoi::find($id);
        return view('suanguoichoi',compact('dsNguoiChoi'));
    }
    public function update(Request $request)
    {
        try {
        $NguoiChoi =NguoiChoi::findOrFail($request->id);
        $NguoiChoi->ten_dang_nhap= $request->ten_dang_nhap;
        $NguoiChoi->mat_khau=$request->mat_khau;
        $NguoiChoi->email=$request->email;
        $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $NguoiChoi->credit=$request->credit;
       $kq= $NguoiChoi->save();

            if ($kq) {
                return redirect()
                        ->route('trang-chu.ql-nguoi-choi')
                        ->with('msg', 'Cập nhật câu hỏi thành công');
            }
            return back()
                    ->withErrors('Cập nhật câu hỏi thất bại')
                    ->withInput();
        } catch (Exception $e) {
            return back()
                    ->withErrors('Có lỗi xảy ra, mời thử lại sau')
                    ->withInput();
        }
    }

    public function themNguoiChoi()
    {
    	return view('themnguoichoi');
    }

    public function updateThem(Request $request)
    {
    	try {
        $NguoiChoi =new NguoiChoi();
        $NguoiChoi->ten_dang_nhap= $request->ten_dang_nhap;
        $NguoiChoi->mat_khau=$request->mat_khau;
        $NguoiChoi->email=$request->email;
        $NguoiChoi->hinh_dai_dien="";
        $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $NguoiChoi->credit=$request->credit;
       $kq= $NguoiChoi->save();

            if ($kq) {
                return redirect()
                        ->route('trang-chu.ql-nguoi-choi')
                        ->with('msg', 'Cập nhật câu hỏi thành công');
            }
            return back()
                    ->withErrors('Cập nhật câu hỏi thất bại')
                    ->withInput();
        } catch (Exception $e) {
            return back()
                    ->withErrors('Có lỗi xảy ra, mời thử lại sau')
                    ->withInput();
        }
    }
    public function xoaNguoiChoi(Request $request)
    {
        $nguoiChoi_xoa=NguoiChoi::findOrFail($request->input('id'));
        if($nguoiChoi_xoa->delete())
        {
            echo 'Data Delete';
        }
    }
}
