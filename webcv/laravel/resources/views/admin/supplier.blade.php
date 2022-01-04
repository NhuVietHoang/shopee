@extends('admin.index')
@section('title')
    nhà cung cấp
@endsection
@section('contentad')
<div class="breadcrumbs-fixed panel-action">
    <div class="row">
        <div class="products-act">
            <div class="col-md-4 col-md-offset-2">
                <div class="left-action text-left clearfix">
                    <h2>Danh sách nhà cung cấp</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-action text-right">
                    <div class="btn-groups">
                        <a href="{{url('admin/createsupplier')}}"><button type="button" class="btn btn-primary" onclick="cms_vcrproduct('1')"><i
                            class="fa fa-plus"></i> thêm nhà cung cấp
                    </button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="products-content">
    <div class="product-sear panel-sear">
        <form action="searchprd" class="" method="POST">
            @csrf
            <div class="form-group col-md-5 padd-0">
                <input type="text" name="key" class="form-control" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm"
                       id="product-search">
            </div>
            <input type="submit" class="btn btn-primary btn-large btn-ssup" value="tìm kiếm"  >
        </form>
    </div>
    <div class="product-main-body">
        
    </div>
</div>

<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
    
    <table class="table table-hover">
         <thead>
            <tr>
                <th>STT</th>
                <th>Tên Nhà Cung Cấp</th>
                <th>Email</th>
                <th>Điện Thoại</th> 
                <th>địa chỉ</th>
                <th></th>
            </tr>
        </thead> 
        <tbody> 
            @foreach ($data as $dt)
            <tr>  
                <th scope="row">1</th>
                <td>{{$dt->name}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->phone}}</td>
                <td>{{$dt->address}}</td>
                <td>
                    <a href="{{url('admin/supplier/detail',$dt->id)}}"><i class="fas fa-info-circle"></i></a>
                    <a href="{{url('admin/supplier/delete',$dt->id)}}" onclick="return confirm('bạn có muốn xóa {{$dt->name}}?');"><i class="fas fa-trash-alt"></i></a> 
                    <a href="{{url('admin/supplier/edit',$dt->id)}}"><i class="fas fa-edit"></i></a>
                </td>  
            </tr> 
            @endforeach
</div>
@endsection