<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('trang-chu')->group(function()
{
    Route::post('/','CauHoiController@getCauHoi')->name('trang-chu.cau-hoi');
    Route::get('login','DangNhapController@index')->name('trang-chu.dang-nhap');
    Route::post('login','DangNhapController@DangNhap')->name('dang-nhap.kiem-tra');
    Route::get('dang-xuat','DangNhapController@DangXuat')->name('dang-xuat');
    Route::get('dang-ky','DangKyController@index')->name('trang-chu.dang-ky');
    Route::post('dang-ky','DangKyController@DangKy')->name('dang-ky');
   	//Route::get('linh-vuc','LinhVucController@loadLinhVuc')->name('trang-chu.home');
    Route::prefix('linh-vuc')->group(function()
    {
    Route::get('','LinhVucController@loadLinhVuc')->name('trang-chu.home')->middleware('auth');
    Route::post('them','LinhVucController@themLinhVuc')->name('trang-chu.them-linh-vuc');
    Route::get('sua/{id}','LinhVucController@suaLinhVuc')->name('trang-chu.sua');
    Route::get('xoa/{id}','LinhVucController@xoaLinhVuc')->name('trang-chu.xoa');
    Route::get('/xoa-ajax','LinhVucController@xoaLV')->name('trang-chu.xoa-ajax');
    Route::post('/','LinhVucController@update')->name('trang-chu.update');
    });


	Route::get('quan-ly-cau-hoi','CauHoiController@index')->name('trang-chu.ql-cau-hoi');
	Route::get('quan-ly-cau-hoi/them-cau-hoi/{id}','CauHoiController@themCauHoi')->name('trang-chu.them-cau-hoi');
	Route::post('quan-ly-cau-hoi','CauHoiController@update')->name('trang-chu.update-cau-hoi');
	Route::get('quan-ly-cau-hoi/sua/{id}','CauHoiController@suaCauHoi')->name('trang-chu.sua-cau-hoi');
	Route::get('quan-ly-cau-hoi/xoa/','CauHoiController@xoaCauHoi')->name('trang-chu.xoa-cau-hoi');


    Route::get('nguoi-choi','NguoiChoiController@index')->name('trang-chu.ql-nguoi-choi');
    Route::get('nguoi-choi/sua/{id}','NguoiChoiController@suaNguoiChoi')->name('trang-chu.sua-nguoi-choi');
    Route::post('nguoi-choi','NguoiChoiController@update')->name('trang-chu.update-nguoi-choi');

    Route::get('nguoi-choi/them-nguoi-choi','NguoiChoiController@themNguoiChoi')->name('trang-chu.them-nguoi-choi');

    Route::post('nguoi-choi/them-nguoi-choi','NguoiChoiController@updateThem')->name('update.them-nguoi-choi');
    Route::get('nguoi-choi/xoa/','NguoiChoiController@xoaNguoiChoi')->name('xoa.nguoi-choi');

    Route::get('goi-credit','GoiCreditController@index')->name('trang-chu.goi-credit');
    Route::get('goi-credit/them-goi-credit','GoiCreditController@themGoiCredit')->name('them-goi-credit');
    Route::post('goi-credit/them-goi-credit','GoiCreditController@updateThem')->name('goi-credit.update');
    Route::get('goi-credit/sua-goi-credit/{id}','GoiCreditController@suaGoiCredit')->name('sua-goi-credit');
    Route::post('goi-credit','GoiCreditController@updateSua')->name('goi-credit.update-sua');
    Route::get('goi-credit/xoa','GoiCreditController@xoaGoiCredit')->name('xoa.goi-credit');
    
    Route::get('lich-su-mua-credit','LichSuMuaCreditController@index')->name('lich-su-mua-credit.index');

    Route::get('luot-choi','LuotChoiController@index')->name('luot-choi.index');




});
//Route::prefix('linh-vuc')->group(function()
//{
//Route::get('them-moi','CauHoiController@create')->name('linh-vuc.them-moi');
//Route::post('them-moi','CauHoiController@store')->name('linh-vuc.xl-them-moi');

//});

