@extends('admin.index')
@section('title')
    chi tiết nhà cung cấp
@endsection

@section('contentad')
{{-- <div class="col-sm-4 wthree-crd widgettable">
    <div class="card">
        <div class="card-body">
    <div class="agileinfo-cdr">
                
        <div class="card-header">
            <h3>Nhà cung cấp</h3>
        </div>
        <hr class="widget-separator">
                
                <div class="widget-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>the sun</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nhà cung cấp:</td>
                                
                            </tr>
                            <tr>
                                <td>Nhà cung cấp:</td>
                            </tr>
                            
                            <tr>
                                <td>Nhà cung cấp:</td>
                            </tr>                                                    
                            <tr>
                                <td>Nhà cung cấp:</td>
                            </tr>
                            <tr>
                               
                            </tr>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="agileinfo-cdr">
    <div class="card-header">
        <h3>sản phẩm cung cấp:</h3>
    </div>
    <hr class="widget-separator">
    <div class="card-body p-b-20">
        <div class="list-group">
            <a class="list-group-item media" href="">
                 <div class="pull-left">
                    <img class="lg-item-img" src="images/4.jpg" alt="">
                </div>
                <div class="media-body">
                    <div class="pull-left">
                        <div class="lg-item-heading">Alexander</div>
                        <small class="lg-item-text">example@gmail.com</small>
                    </div>
                    <div class="pull-right">
                        <div class="lg-item-heading">Ceo</div>
                    </div>
                </div>
            </a>
            <a class="list-group-item media" href="">
                <div class="pull-left">
                    <img class="lg-item-img" src="images/1.jpg" alt="">
                </div>
                <div class="media-body">
                    <div class="pull-left">
                        <div class="lg-item-heading">Jackson Jacob</div>
                        <small class="lg-item-text">example@hotmail.com</small>
                    </div>
                    <div class="pull-right">
                        <div class="lg-item-heading">Director</div>
                    </div>
                </div>
            </a>
            <a class="list-group-item media" href="">
                <div class="pull-left">
                    <img class="lg-item-img" src="images/3.jpg" alt="">
                </div>
                <div class="media-body">
                    <div class="pull-left">
                        <div class="lg-item-heading">Merina lisa</div>
                        <small class="lg-item-text">example1@gmail.com</small>
                    </div>
                    <div class="pull-right">
                        <div class="lg-item-heading">Manager</div>
                    </div>
                </div>
            </a>
            <a class="list-group-item media" href="">
                <div class="pull-left">
                    <img class="lg-item-img" src="images/1.jpg" alt="">
                </div>
                <div class="media-body">
                    <div class="pull-left">
                        <div class="lg-item-heading">Michael</div>
                        <small class="lg-item-text">example1@hotmail.com</small>
                    </div>
                    <div class="pull-right">
                        <div class="lg-item-heading">Assistant</div>
                    </div>
                </div>
            </a>
           
            
           </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết nhà cung cấp</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @foreach ($info as $v_info)
                        
                    
                    <strong><i class="fas fa-house-user"></i> Tên nhà cung cấp</strong>

                    <p class="text-muted">
                            {{$v_info->name}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-envelope"></i> Email</strong>

                    <p class="text-muted">
                        {{$v_info->email}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-mobile-alt"></i> Số điện thoại</strong>

                    <p class="text-muted">
                        {{$v_info->phone}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Địa chỉ</strong>

                    <p class="text-muted">
                        {{$v_info->address}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-clock"></i> Thời gian tạo</strong>

                    <p class="text-muted">
                        {{ date('d-m-Y', strtotime($v_info->created_at)) }}
                    </p>
                    @endforeach
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#product"
                                                    data-toggle="tab">Sản phẩm cung cấp</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="product">
                            <div class="card-body table-responsive p-0" style="max-height: 65vh; overflow: auto;">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Thời gian tạo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($product as $v_product)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $v_product->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($v_product->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@endsection