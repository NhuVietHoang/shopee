@extends('admin.index')

@section('title')
    nhập hàng
@endsection

@section('contentad')
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-default" style="max-height: 80vh; overflow: auto;">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">
                            <i class="fas fa-home"></i>
                            Nhà cung cấp
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="">
                            <div class="form-check" id="myform">
                                <select class="form-select" name="supplier" aria-label="Default select example" id="id_supplier">
                                    <option disabled selected>chọn nhà cung cấp</option>
                                    @foreach ($supplier as $suppliers)
                                    <option value="{{$suppliers->id}}" >{{ucfirst($suppliers->name)}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            {{-- @endforeach --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-xl-8">
                <div class="card card-default" style="max-height: 80vh; overflow: auto;">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">
                            <i class="fas fa-bullhorn"></i>
                            Sản phẩm cung cấp
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    
                                    <th>Tên sản phẩm</th>
                                    <th id="qtyy">Số lượng</th>
                                    <th id="action"></th>
                                </tr>
                                </thead>
                                <tbody id="products">
                                    
                                    
                                    <td><select name="product" class="form-select" aria-label="Default select example"id="id_product">
                                        {{-- <option selected>chọn sản phẩm </option> --}}
                                        
                                      </select>
                                    </td>
                                    <td><input name="qty" id="qtyy" type="text"></td>
                                    <td> <button type="submit" class="btn btn-default">Đặt Hàng</button></td>
                                </tbody>
                            </form>   
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
        <script>
            $(document).ready(function(){
                $('#id_supplier').on('change',function(){
                let id = $(this).val();
                $('id_product').empty();
                $('id_product').append(`<option value="0" disabled selected>chọn sản phẩm </option>`);
                $.ajax({
                    type:'GET',
                    url:'/admin/purchase/' +id,
                    success:function(response){
                        var response = JSON.parse(response);
                        console.log(response);
                        $('#id_product').empty();
                        $('#id_product').append(`<option value="0" disabled selected>chọn sản phẩm </option>`);
                        response.forEach(product=>{
                            $('#id_product').append(`<option value="${product['id']}"> ${product['name']} </option>`);
                        });
                    }
                });
                });
            });
        </script>

@endsection