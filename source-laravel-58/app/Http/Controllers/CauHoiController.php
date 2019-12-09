<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use App\CauHoi;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLinhVuc=LinhVuc::all();
        $dsCauHoi=CauHoi::all();
        return view('cauhoi', compact('dsCauHoi','dsLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLinhVuc=LinhVuc::all();
        return view('layout', compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhVuc=new LinhVuc();
        $linhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->action('CauHoiController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
        $CauHoi =CauHoi::findOrFail($request->id);
        $CauHoi->noi_dung= $request->noi_dung;
        $CauHoi->linh_vuc_id=$request->linh_vuc_id;
        $CauHoi->phuong_an_a=$request->phuong_an_a;
        $CauHoi->phuong_an_b=$request->phuong_an_b;
        $CauHoi->phuong_an_c=$request->phuong_an_c;
        $CauHoi->phuong_an_d=$request->phuong_an_d;
        $CauHoi->dap_an=$request->dap_an;
       $kq= $CauHoi->save();

            if ($kq) {
                return redirect()
                        ->route('trang-chu.ql-cau-hoi')
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getCauHoi()
    {
        
      //$cauHoi=CauHoi::where('linh_vuc_id','=',$request->linh_vuc_id)->get();
        
           
       // if($request->ajax()) {
        // return view('home')->renderSections();
    }
    public function themCauHoi($id){
        $dsLinhVuc=LinhVuc::find($id);
        return view('themcauhoi',compact('dsLinhVuc'));
    }

    public function suaCauHoi($id){
        $dsCauHoi=CauHoi::find($id);
        $dsLinhVuc=LinhVuc::find($dsCauHoi->linh_vuc_id);
        return view('suacauhoi',compact('dsLinhVuc','dsCauHoi'));
    }
    public function xoaCauHoi(Request $request)
    {
       $cauHoi_xoa=CauHoi::findOrFail($request->input('id'));
        if($cauHoi_xoa->delete())
        {
            echo 'Data Delete';
        }
    }
}
