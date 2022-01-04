<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('assets/css/dangki.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font/fontawesome-free-5.15.1-web/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>dang ki</title>

    
</head>
<body>
<div class="header_dangki">
    <div class="dangki">
        
        <form action="dangki" class="form_dangki" method="POST">
         
            @csrf
            <ul class="ul_dangki">
                <h3 style="font-family: Arial, Helvetica, sans-serif;color:#222">Đăng Kí</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên Đăng kí</label>
                    <input type="text" class="form-control" name="ten" id="exampleInputEmail1" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @if ($errors->has('ten'))
                        {{-- <li>{{ $errors }}</li> --}}
                        Nhập lại tên
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Số Điện thoại</label>
                    <input type="text" name="sdt" class="form-control" id="exampleInputPassword1">
                    @if ($errors->has('ten'))
                        {{-- <li>{{ $errors }}</li> --}}
                        Nhập lại tên
                    @endif
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
                      <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                      @if ($errors->has('ten'))
                        {{-- <li>{{ $errors }}</li> --}}
                        Nhập lại tên
                    @endif
                    </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                <li class="form3"> <input class="butdk" type="submit" value="Đăng kí"></li>
            </ul>
            <div class="hoac">
                <div class="gachngang"></div>
                <span style="margin: 0px 15px;">HOẶC</span>
                <div class="gachngang"></div>
            </div>
            <div class="button_app">
                <button class="button_fb">
                    <div class="link_app-fb">
                        <div ><i style="font-size: 22px;" class="fab fa-facebook"></i></div>
                        <span class="text_fb" style="color: while;">Facebook</span>
                    </div>
                </button>
                <button class="button_gg">
                    <div class="link_app-gg">
                        <div><img class="img-gg" src="/image/dangki/gg.png" alt=""></div>
                        <span class="text_gg">Google</span>
                    </div>
                </button>
                <button class="button_apple">
                    <div class="link_app-store">
                        <div><i style="font-size: 22px; margin-left: 12px;" class="fab fa-apple"></i></div>
                        <span class="text_apple">Apple</span>
                    </div>
                </button>
            </div>
            <div>

            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>