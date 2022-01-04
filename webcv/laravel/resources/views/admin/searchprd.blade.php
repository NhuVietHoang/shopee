@extends('admin.index')
@section('contentad')
<div class="products">
    <div class="breadcrumbs-fixed panel-action">
        <div class="row">
            <div class="products-act">
                <div class="col-md-4 col-md-offset-2">
                    <div class="left-action text-left clearfix">
                        <h2>Danh sách sản phẩm</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-action text-right">
                        <div class="btn-groups">
                            <button type="button" class="btn btn-primary" onclick="cms_vcrproduct('1')"><i
                                    class="fa fa-plus"></i> Tạo sản phẩm
                            </button>
<!--                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> Xuất Excel-->
<!--                            </button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-space orders-space"></div>

    <div class="products-content">
        <div class="product-sear panel-sear">
            <form action="searchprd" class="" method="POST">
                @csrf
                <div class="form-group col-md-5 padd-0">
                    <input type="text" name="key" class="form-control" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm"
                           id="product-search">
                </div>
                <div class="form-group col-md-7 ">
                    <div class="col-md-3 padd-0" style="margin-right: 10px;">
                        <select class="form-control" id="search-option-1">
                            <option value="0">Đang kinh doanh</option>
                            <option value="1">Đã ngừng kinh doanh</option>
                            <option value="2">Đã xóa</option>
                        </select>
                    </div>
                    <div class="col-md-3 padd-0" style="margin-right: 10px;">
                        <select class="form-control search-option-2" id="prd_group_id">
                            <option value="-1" selected="selected">--Danh mục--</option>
                        </select>
                    </div>
                    <div class="col-md-3 padd-0" style="margin-right: 10px;">
                        <select class="form-control search-option-3" id="prd_manufacture_id">
                            <option value="-1" selected="selected">--Nhà sản xuất--</option>
                            <optgroup label="Chọn nhà sản xuất">
                                
                            </optgroup>
                            <optgroup label="------------------------">
                                <option value="product_manufacture" data-toggle="modal" data-target="#list-prd-manufacture">Tạo mới
                                    Nhà sản xuất
                                </option>
                            </optgroup>
                        </select>
                    </div>
                    
                    <input type="submit" class="btn btn-primary btn-large btn-ssup" value="tìm kiếm"  >
                    {{-- <i class="fa fa-search"></i>  --}}
                    {{-- </button> --}}
                </div>
            </form>
        </div>
        <div class="product-main-body">
            
        </div>
    </div>
</div>
<div class="table-responsive bs-example widget-shadow" style="display: contents;">
    <h4>Bảng Sản phẩm:</h4>
    <table class="table table-bordered"> 
        <thead>
         <tr>
            <th>id</th>
            <th>tên sản phẩm</th>
            <th>số lượng</th> 
            <th>giá bán(VNĐ)</th> 
            <th>giá khuyến mãi(VNĐ)</th> 
            <th>loại sản phẩm</th> 
            <th>thao tác</th> 
        </tr> 
        </thead> 
        <tbody> 
            @foreach ($data as $dt)
                
            
            <tr> 
                <th scope="row">{{$dt->id}}</th> 
                <td>{{$dt->name}}</td> 
                <td>{{$dt->id}}</td> 
                <td>{{$dt->unit_price}}</td> 
                <td>{{$dt->promotion_price}}</td> 
                <td>{{$dt->id_type}}</td> 
                <td>
                    
                   <a href="{{url('admin/delete',$dt->id)}}"><i class="fas fa-trash-alt"></i></a> 
                    <a href=""><i class="fas fa-edit"></i></a>
                </td> 
            </tr> 
            @endforeach
        </tbody> 
    </table> 
</div>
@endsection