<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
{
    public function loadLinhVuc()
    {
    	$dsLinhVuc= LinhVuc::orderBy('id')->get();
    	return view('layout', compact('dsLinhVuc'));
    }
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function themLinhVuc(Request $request)
    {
        if($request->ten_linh_vuc=="")
                return redirect()->back()->with('thongbao','Tên lĩnh vực bị bỏ trống !');
        else
        {
    	$linhVuc=new LinhVuc();
        $linhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->action('LinhVucController@loadLinhVuc');
        }
    }
    public function suaLinhVuc($id)
    {
    	$dsLinhVuc=LinhVuc::all();
        $linhVuc_sua=LinhVuc::find($id)->toArray();
        return view('suaLinhVuc',compact('dsLinhVuc','linhVuc_sua'));
    }
    public function update(Request $request)
    
    {
        try {

            $linhvuc = LinhVuc::findOrFail($request->linh_vuc_id);
            $linhvuc->ten_linh_vuc = $request->ten_linh_vuc;
            $kq = $linhvuc->save();
            if ($kq) {
                return redirect()
                        ->route('trang-chu.home')
                        ->with('msg',"Cập nhật lĩnh vực thành công");
             }
            return back()
                    ->withErrors('Cập nhật lĩnh vực thất bại')
                    ->withInput();
        } catch (Exception $e) {
            return back()
                    ->withErrors('Có lỗi xảy ra, mời thử lại sau')
                    ->withInput();
        }
    }
    public function xoaLinhVuc($id)
    {
        $linhVuc_xoa=LinhVuc::findOrFail($id)->delete();
        return redirect()->Route('trang-chu.home');
    }
    public function xoaLV(Request $request)
    {
        $linhVuc_xoa=LinhVuc::findOrFail($request->input('id'));
        if($linhVuc_xoa->delete())
        {
            echo 'Data Delete';
        }
        
    }
}
