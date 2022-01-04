
@extends('admin.index')
@section('contentad')
<div class="products">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
    <div class="breadcrumbs-fixed panel-action">
        <div class="row">
            <div class="products-act">
                <div class="col-md-4 col-md-offset-2">
                    <div class="left-action text-left clearfix">
                        <h2></i>Tạo sản phẩm</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-action text-right">
                        <div class="btn-groups">
                            
                            <button type="button" class="btn btn-default"
                                    onclick="cms_javascript_redirect( cms_javascrip_fullURL() )"><i
                                    class="fa fa-arrow-left"></i> Trở về
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-space customer"></div>

    <div class="products-content" style="margin-bottom: 25px;">
        <div class="basic-info">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 padd-0">
                        <h4>Thông tin cơ bản</h4>
                        <small>Nhập tên và các thông tin cơ bản của sản phẩm</small>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <form action="createproduct" method="POST">
                                @csrf
                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-left-0">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" id="prd_name"
                                           name="name"
                                           class="form-control"
                                           placeholder="Nhập tên sản phẩm"/>
                                </div>
                                <div class="col-md-6 padd-right-0">
                                    <label>ID sản phẩm</label>
                                    <input type="text" id="prd_code" class="form-control "
                                           placeholder="Nếu không nhập, hệ thống sẽ tự sinh."/>
                                           
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-left-0">
                                    <label>Số lượng</label>
                                    <input type="text" name="soluong" id="prd_sls" value="" placeholder="0"
                                           class="form-control text-right txtNumber"/>
                                </div>
                              
                            </div>

                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-left-0">
                                    <label>Giá Bán</label>
                                    <input type="text" name="unit_price" id="prd_origin_price"
                                          
                                           class="form-control text-right txtMoney" placeholder=""/>
                                </div>
                                <div class="col-md-6 padd-right-0">
                                    <label>Giá khuyến mại</label>
                                    <input name="promotion_price" type="text" id="prd_sell_price"
                                          
                                           class="form-control txtMoney text-right" placeholder="0"/>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-left-0">
                                    <label>Danh mục</label>
                                        <div class="form-control" id="prd_group_id">
                                            <input name="type" type="text" style="border: none" >
                                        </div>
                                </div>
                                <div class="col-md-6 padd-right-0">
                                    <label>Ảnh</label> 
                                        <div class="form-control" id="prd_manufacture_id">
                                            <input name="image" type="file"  value="chọn ảnh">
                                        </div>                                   
                                </div>

                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-6 padd-right-0">
                                     <input type="submit"class="btn btn-primary " >
                                     
                                </div>
                                
                            </div>
                        </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection