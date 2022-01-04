@extends('admin.index')

@section('title')
    sửa nhà cung cấp
@endsection

@section('contentad')
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Thay đổi thông tin người dùng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @foreach ($supplier as $v_supplier)
                <form role="form" action="{{url('admin/supplier/edit',$v_supplier->id)}}" method="POST">
                    @csrf
                    {{-- {{ method_field('PUT') }} --}}

                    <div class="card-body">
                   
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên</label>
                            <input type="text" class="form-control" name="name" value="{{ $v_supplier->name }}">

                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $v_supplier->email }}">

                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input type="text" class="form-control" name="phone" value="{{ $v_supplier->phone }}">

                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" value="{{ $v_supplier->address }}">

                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @endforeach
                    
                        @for($i = 0; $i <= count($products); $i++)
                        <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="product_id[]"
                                       value="{{ $products[$i]->id }}" id="flexSwitchCheckChecked"
                                       style="margin-left: -1.25rem;">
                                <label class="form-check-label" for="flexSwitchCheckChecked"
                                       style="margin-left: 1.25rem;">{{ $products[$i]->name }}</label>
                            </div>
                        </div>
                        @if($i == count($products) - 1)
                            @break
                        @endif
                        @php
                            $i++;
                        @endphp
                        <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="product_id[]"
                                       value="{{ $products[$i]->id }}" id="flexSwitchCheckChecked"
                                       style="margin-left: -1.25rem;">
                                <label class="form-check-label" for="flexSwitchCheckChecked"
                                       style="margin-left: 1.25rem;">{{ $products[$i]->name }}</label>
                            </div>
                        </div>
                    @endfor
                    
          
                    <!-- /.card-body -->

                    
                    </div>
                    
                </div>
                <div  class="form-group">
                    <a href="" class="btn btn-danger">Huỷ bỏ</a>
                    <button type="submit" class="btn btn-success">Thay đổi</button>
                </div>
                </form>
           
        </div>
    </div>
    <!-- /.row (main row) -->
</div>
@endsection