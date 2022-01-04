@extends('master')
@section('content')
<div class="menu1">
    <div class="list-menu1">
        <div class="box-danhmuc">
                <div class="list-danhmuc">
                    <ul style="padding-left: 0px;"> 
                        <li class="item-danhmuc danhmuc-big"><h3 class="h3-danhmuc" style="color: black;">DANH MỤC</h3></li>
                        <li class="item-danhmuc"> <a class="link-danhmuc" href="">Nivia men  </a> 
                                <div class="danhmuc-nho">
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Kem dưỡng</div></a> </div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Dầu gội</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Sữa rửa mặt</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">nước hoa</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">lăm ngăn mùi</div></a></div>  
                                </div>
                        </li>
                        <li class="item-danhmuc"> <a class="link-danhmuc" href="">Oxy  </a>
                            <div class="danhmuc-nho">
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Kem rửa mặt</div></a> </div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">thuốc trị mụn</div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Miếng pad</div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">sữa tắm </div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">dầu gội</div></a></div>
                            </div>
                        </li>
                        <li class="item-danhmuc"> <a class="link-danhmuc" href="">Xmen  </a>
                            <div class="danhmuc-nho">
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Kem rửa mặt</div></a> </div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Dầu gội</div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Sữa Tắm</div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Nước Hoa </div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Sáp</div></a></div>
                            </div>
                        </li>
                        <li class="item-danhmuc"> <a class="link-danhmuc" href="">Phụ kiệm </a>
                            <div class="danhmuc-nho">
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Quần</div></a> </div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Áo </div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Giày</div></a></div>
                                <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Ví </div></a></div>
                            </div>
                        </li>
                        <li class="item-danhmuc"> <a class="link-danhmuc" href="">Thực phẩm chức năng </a></li>
                        <li class="item-danhmuc"> <a class="link-danhmuc" href="">Dịch vụ  </a></li>


                    </ul>
                </div>
            
        </div>

        <div class="box-sanpham">
            
                
           
            <h1 class="text-sanpham">có {{count($data)}}   kết quả tìm kiếm:</h1>
            
            <div class="sanpham">
                @foreach ($data as $v_data)
                <div class="box-linksanpham">
                    <a class="link-sanpham" href="{{url('sanpham',$v_data->id)}}">
                        <div class="box-imgsanpham"><img class="img-sanpham" src="/image/contrainer/sanpham/{{$v_data->image}}" alt=""> </div>
                        <div class="box-ttsanpham">
                            <div>{{$v_data->name}}</div>
                            <div class="box-tt">
                                <div class="tt-gia">{{$v_data->unit_price}}</div>
                                <div class="tt-sl">đã bán 2,1k</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach 

            </div>
            
        </div>


        
    </div>
</div>   
@endsection