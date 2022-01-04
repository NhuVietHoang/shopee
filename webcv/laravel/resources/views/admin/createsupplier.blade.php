@extends('admin.index')
@section('title')
    tạo nhà cung cấp
@endsection
@section('contentad')
{{-- @if(Session::has('success'))
<script>
    toastr.success("{!! Session::get('success') !!}");
</script>
@endif --}}

<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
   
    <div class="breadcrumbs-fixed panel-action">
        <div class="row">
            <div class="products-act">
                <div class="col-md-4 col-md-offset-2">
                    <div class="left-action text-left clearfix">
                        <h2>Tạo Nhà Cung Cấp:</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-action text-right">
                        <div class="btn-groups">
                            <a href="{{url('admin/supplier')}}"><button type="button" class="btn btn-primary" onclick="cms_vcrproduct('1')">
                                <i class="fas fa-arrow-left"></i> Quay Lại
                        </button></a>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-body">
        <form action="{{url('admin/createsupplier')}}" method="POST">
            @csrf 
            <div class="form-group"> 
                <label for="exampleInputEmail1">tên nhà cung cấp</label>
                 <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="tên"> 
                 @error('name')
                        <div class="text-danger">{{ $message }}</div>
                 @enderror
            </div> 
            <div class="form-group"> 
                <label for="exampleInputEmail1">Email</label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                 @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="form-group"> 
                <label for="exampleInputPassword1">số điện thoại</label> 
                <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="SĐT"> 
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="form-group"> 
                <label for="exampleInputPassword1">địa chỉ</label> 
                <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="địa chỉ">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="panel-body widget-shadow">
                <h4>Mặt hàng cung cấp:</h4>
                
                @for($i = 0; $i <= count($data); $i++)
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="product_id[]"
                               value="{{ $data[$i]->id }}" id="flexSwitchCheckChecked"
                               style="margin-left: -1.25rem;">
                        <label class="form-check-label" for="flexSwitchCheckChecked"
                               style="margin-left: 1.25rem;">{{ $data[$i]->name }}</label>
                    </div>
                </div>
                @if($i == count($data) - 1)
                    @break
                @endif
                @php
                    $i++;
                @endphp
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="product_id[]"
                               value="{{ $data[$i]->id }}" id="flexSwitchCheckChecked"
                               style="margin-left: -1.25rem;">
                        <label class="form-check-label" for="flexSwitchCheckChecked"
                               style="margin-left: 1.25rem;">{{ $data[$i]->name }}</label>
                    </div>
                </div>
            @endfor
                
            </div>
            <button type="submit" class="btn btn-default">Tạo</button> 
            <a href="" class="btn btn-danger">Huỷ bỏ</a>
        </form> 
        
    </div>
</div>
@endsection