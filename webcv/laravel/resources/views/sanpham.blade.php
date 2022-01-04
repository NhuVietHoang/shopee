@extends('master')
@section('content')
<div class="container">
    <div class="box-muasanpham">
        <div class="boxcon-muasanpham">
        @foreach($data as $dt)
        <div class="box-avatar">
            
                <div class="box-avt-sanpham"><img class="avt-sanpham" src="/image/contrainer/sanpham/{{$dt->image}}" alt=""> </div>

                <div class="box-avtcon-sanpham"><img class="avtcon-sanpham" src="/image/contrainer/sanpham/{{$dt->image}}" alt=""></div>
                
            </div>
            <div class="mua">
                <div class="muacon">
                    <div class="muacon1">
                        <div class="yeuthich">yêu thích+</div>
                        <span>{{$dt->name}}</span>
                    </div>
                    <div class="muacon2">
                        <div class="box-star">
                            <div class="star-box">
                            <div style="font-size: 15px;">5/5</div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            </div>
                        </div>
                        <div>
                            <div class="box-star">
                                <div class="text-muacon2">2.1k đã bán</div>
                            </div>
                        </div>
                    </div>
            <form action="{{url('/save-cart')}}" method="POST" >
                @csrf
                    <div class="muacon3">
                        <div class="box-muacon3">
                            <div class="muacon3-1">
                                <div class="no-sale" >{{$dt->unit_price}}</div>
                                
                            </div>
                            <div class="muacon3-1">
                                <div class="now-sale" name='price'>{{$dt->promotion_price}}</div>
                                <input name="price" value="{{$dt->promotion_price}}" style="display: none">
                            </div>
                            <div class="muacon3-1" class="tile">
                                 <div class="tile"> giảm %</div>         
                            </div>
                        </div>
                    </div>
                    <div class="muacon4">
                        <div class="box-muacon4">
                            <input name="id_product" value="{{$dt->id}}" style="display: none">
                            
                            
                           <div class="box-thongtin">
                               <div class="thongtin">
                                    thông tin
                                </div>
                            </div>
                           <div class="box-thongtin">
                                <div class="tongquan">
                                    Tổng quan <br>
                                    <span class="text-tongquan">Nước hoa Xmen 50ml (Tặng Bộ Mini 3 món)

                                        Nước hoa Xmen 50ml
                                        Với hương thơm nồng nàn, phóng khoáng từ xạ hương và gỗ tuyết tùng, Nước hoa X-Men Wood Sport Thơm lâu mang lại cảm giác tươi mới tích cực suốt ngày dài, để bạn tự do khám phá mọi trải nghiệm.
                                        Dung tích chai 50 ml cùng thiết kế đơn giản nhưng vẫn tinh tế giúp nâng tầm đẳng cấp của phái mạnh.
                                        Mùi nước hoa sẽ lưu giữ được lâu hơn nếu bạn xịt vào quần áo, tránh quần áo sáng màu</span>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="muacon5">
                        <div class="box-soluong">
                            <div class="soluong">
                                Số Lượng
                            </div>
                            <div class="button-soluong">
                                <input class="button-tru" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                                <input class="text-soluong"  id='quantity' min='1' name='quanty' type='text' value='1' />
                                <input class="buttton-cong" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                                
                            
                            </div>
                        </div>
                    </div>
                    <div class="muacon6">
                        <div class="box-donvi">
                            <div class="donvi"> Đơn Vị</div>
                            <div class="chai"> Chai</div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                    @if (Auth::check())
                        <button type="submit" name="have-accout" class="button-mua "><i class="fa fa-floppy-o"></i> Mua ngay
                    </form>
                    @else
                       <a href="url{{url('dangnhap')}}"><button type="submit" name="no-accout" class="button-mua "><i class="fa fa-floppy-o"></i> Mua ngay</button></a>
                    @endif
                    </div>
                </div>
           
                @endforeach
            </div>
        </div>
        <div class="icon-mua">
        </div>    
        
    </div>
    
   
</div>

@endsection

