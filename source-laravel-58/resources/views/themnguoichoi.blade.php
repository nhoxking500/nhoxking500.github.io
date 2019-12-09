@extends('master')
@section('main')

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Sửa</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Thêm người chơi</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title"></h4>

                                <form method="POST" action="{{route('update.them-nguoi-choi')}}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" name="id" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="ten_dang_nhap">
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <label >Mật khẩu</label>
                                        <input type="text" class="form-control" name="mat_khau">
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label >Điểm cao nhất</label>
                                        <input type="text" class="form-control" name="diem_cao_nhat">
                                    </div>
                                    <div class="form-group">
                                        <label >Credit</label>
                                        <input type="text" class="form-control" name="credit">
                                    </div>
                    
                                    
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm người chơi</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>

                  
                    
        

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
@endsection
        