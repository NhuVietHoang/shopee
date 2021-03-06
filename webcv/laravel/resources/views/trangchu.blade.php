@extends('master')
@section('content')
<div class="container">
    <div class="banner">
        <div class="banner-slide">
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner1.jfif" alt=""  ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner2.jfif" alt=""   ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner3.jfif" alt=""  ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner4.jfif" alt=""  ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner5.jfif" alt=""  ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner6.jfif" alt=""  ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner7.png" alt=""  ></div>
            <div class="slide fade"><img class="banner-img" src="image/contrainer/banner/banner8.png" alt=""  ></div>
            <div class="button-slide">
                
                <a  onclick="plusSlides(-1)" class="prev"><i class="fas fa-chevron-left"></i></a>
                
                <a  onclick="plusSlides(+1)" class="next"><i class="fas fa-chevron-right"></i></a>
                <ul class="ul-slide">
                    <li class="li-slide" onclick="currentSlide(1)"></li>
                    <li class="li-slide" onclick="currentSlide(2)"></li>
                    <li class="li-slide" onclick="currentSlide(3)"></li>
                    <li class="li-slide" onclick="currentSlide(4)"></li>
                    <li class="li-slide" onclick="currentSlide(5)"></li>
                    <li class="li-slide" onclick="currentSlide(6)"></li>
                    <li class="li-slide" onclick="currentSlide(7)"></li>
                    <li class="li-slide" onclick="currentSlide(8)"></li>
                </ul>
                
            </div>
        </div>
        <div class="banner-small">
            <div class="banner-small-img"><img class="img-sm" src="image/contrainer/banner/bannersm1.jpg" alt=""></a></div>
            <div class="banner-small-img"><img class="img-sm" src="image/contrainer/banner/bannesn2.png" alt=""></div>
        </div>
        
    </div>
    <div class="box-sale">
        <div class="box-flash-sale">
            <div class="box-text">
            <div class="text-sale">FLASH SALE</span> <span></span></div>
            <a href="" class="xem-sale"> Xem T???t C??? ></a>
            </div>
        </div>
        <div class="item-flash-sale">
            <ul class="box-item-sale">
                <li class="item-sale"><a href=""><img class="img-item-sale" src="image/contrainer/sale/sale1.jpg" alt="">
                    <div class="phantram">27% <br> Gi???m</div>
                    <div class="gia-sale"><span style="font-size: 10px;">??</span> 296.000</div></a>
                </li>
                <li class="item-sale"><a href=""><img class="img-item-sale" src="image/contrainer/sale/sale2.jpg" alt="">
                    <div class="phantram">28% <br> Gi???m</div>
                    <div class="gia-sale"><span style="font-size: 10px;">??</span> 248.000</div></a>
                </li>
                <li class="item-sale"><a href=""><img class="img-item-sale" src="image/contrainer/sale/sale3.jpg" alt="">
                    <div class="phantram">29% <br> Gi???m</div>
                    <div class="gia-sale"><span style="font-size: 10px;">??</span> 396.000</div></a>
                </li>
                <li class="item-sale"><a href=""><img class="img-item-sale" src="image/contrainer/sale/sale4.jpg" alt="">
                    <div class="phantram">36% <br> Gi???m</div>
                    <div class="gia-sale"><span style="font-size: 10px;">??</span> 76.000</div></a>
                </li>
                <li class="item-sale"><a href=""><img class="img-item-sale" src="image/contrainer/sale/sale5.jpg" alt="">
                    <div class="phantram">48%<br> Gi???m</div>
                    <div class="gia-sale"><span style="font-size: 10px;">??</span> 80.000</div></a>
                </li>
                <li class="item-sale"><a href=""><img class="img-item-sale" src="image/contrainer/sale/sale6.jpg" alt="">
                    <div class="phantram">12% <br> Gi???m</div>
                    <div class="gia-sale"><span style="font-size: 10px;">??</span> 396.000</div></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- menu -->
    <div class="menu1">
        <div class="list-menu1">
            <div class="box-danhmuc">
                    <div class="list-danhmuc">
                        <ul style="padding-left: 0px;"> 
                            <li class="item-danhmuc danhmuc-big"><h3 class="h3-danhmuc" style="color: black;">DANH M???C</h3></li>
                            <li class="item-danhmuc"> <a class="link-danhmuc" href="">Nivia men  </a> 
                                    <div class="danhmuc-nho">
                                        <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Kem d?????ng</div></a> </div>
                                        <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">D???u g???i</div></a></div>
                                        <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">S???a r???a m???t</div></a></div>
                                        <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">n?????c hoa</div></a></div>
                                        <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">l??m ng??n m??i</div></a></div>  
                                    </div>
                            </li>
                            <li class="item-danhmuc"> <a class="link-danhmuc" href="">Oxy  </a>
                                <div class="danhmuc-nho">
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Kem r???a m???t</div></a> </div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">thu???c tr??? m???n</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Mi???ng pad</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">s???a t???m </div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">d???u g???i</div></a></div>
                                </div>
                            </li>
                            <li class="item-danhmuc"> <a class="link-danhmuc" href="">Xmen  </a>
                                <div class="danhmuc-nho">
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Kem r???a m???t</div></a> </div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">D???u g???i</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">S???a T???m</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">N?????c Hoa </div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">S??p</div></a></div>
                                </div>
                            </li>
                            <li class="item-danhmuc"> <a class="link-danhmuc" href="">Ph??? ki???m </a>
                                <div class="danhmuc-nho">
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Qu???n</div></a> </div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">??o </div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">Gi??y</div></a></div>
                                    <div class="box-danhmucnho">  <a class="item-danhmnucnho" href=""> <div class="link-danhmucnho">V?? </div></a></div>
                                </div>
                            </li>
                            <li class="item-danhmuc"> <a class="link-danhmuc" href="">Th???c ph???m ch???c n??ng </a></li>
                            <li class="item-danhmuc"> <a class="link-danhmuc" href="">D???ch v???  </a></li>


                        </ul>
                    </div>
                
            </div>

            <div class="box-sanpham">
                <h1 class="text-sanpham">C??c s???n ph???m b??n ch???y</h1>
                <div class="sanpham">
                    @foreach ($product as $prd)
                        
                    
                    <div class="box-linksanpham">
                        <a class="link-sanpham" href="{{url('sanpham',$prd->id)}}">
                            <div class="box-imgsanpham"><img class="img-sanpham" src="image/contrainer/sanpham/{{$prd->image}}" alt=""> </div>
                            <div class="box-ttsanpham">
                                <div>{{$prd->name}}</div>
                                <div class="box-tt">
                                    <div class="tt-gia">{{$prd->unit_price}}</div>
                                    <div class="tt-sl">???? b??n 2,1k</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    

                </div>
            </div>


            
        </div>
    </div>

    <div class="box-tintuc">
        <div class="text-tintuc">
            <h1 style="margin-bottom: 0px;">TIN T???C</h1>
        </div>
        <div class="box-itemtintuc">
            <div class="item-tintuc">
                <a class="link-tintuc" href="">
                    <div><img class="img-tintuc" src="image/contrainer/tintuc/tintuc1.jpg" alt=""></div>
                    <div>
                        <div class="tintuc">C??C B?????C D?????NG DA CHO NAM</div>
                        <div class="xemthem">xem th??m</div>
                    </div>
                </a>
            </div>
            <div class="item-tintuc">
                <a class="link-tintuc" href="">
                    <div><img class="img-tintuc" src="image/contrainer/tintuc/tintuc2.jpg" alt=""></div>
                    <div>
                        <div class="tintuc">PH???I ????? C??NG S??? NAM</div>
                        <div class="xemthem">xem th??m</div>
                    </div>
                </a>
            </div>
            <div class="item-tintuc">
                <a class="link-tintuc" href="">
                    <div><img class="img-tintuc" src="image/contrainer/tintuc/tintuc3.jpg" alt=""></div>
                    <div>
                        <div class="tintuc">B??I T???P GI???M M??? CHO NAM</div>
                        <div class="xemthem">xem th??m</div>
                    </div>
                </a>
            </div>
            <div class="item-tintuc">
                <a class="link-tintuc" href="">
                    <div><img class="img-tintuc" src="image/contrainer/tintuc/tintuc4.jpg" alt=""></div>
                    <div>
                        <div class="tintuc">99 C??CH PH???I ????? NAM</div>
                        <div class="xemthem">xem th??m</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="ngang"></div>
@endsection
