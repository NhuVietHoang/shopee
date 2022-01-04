
@extends('admin.index')
@section('title')
    Đơn Hàng
@endsection
@section('contentad')
<div class="table-responsive bs-example widget-shadow">
    <h4>Đơn hàng:</h4>
    <table class="table table-bordered">
         <thead>
              <tr>
                <th>id</th>
                <th>Tên khách hàng</th>
                 
                  <th>sản phẩm</th> 
                  <th>số lượng</th> 
                  <th>tổng tiền</th> 
                  
                  <th>trạng thái</th> 
                  <th>thao tác</th>
                </tr> 
            </thead> 
            <tbody> 
                @foreach ($data as $v_data)
                <tr> 
                    <th scope="row">{{$v_data->id}}</th>
                     <td>{{$v_data->name}}</td>
                     
                     {{-- <td>{{$v_data->address}}</td> --}}
                     <td>{{$v_data->name_prd}}</td>
                     <td>{{$v_data->qty}}</td>
                     <td>{{$v_data->total_price}}</td>
                     <td><select aria-label="Books nad Snippets">
                          <option value="ok">chưa xác nhận</option>
                          <option value="confirn">xác nhận</option>
                          <option value="ship">đã giao cho shipper</option>
                      </select></td>
                      <td>
                        <a href=""><i class="fas fa-save"></i></a>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                        <a href=""><i class="fas fa-info-circle"></i></a>
                      </td>
                </tr>
                @endforeach
                
</div>

@endsection