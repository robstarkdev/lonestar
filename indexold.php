<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lonestar Hosting - 美国德州寄宿家庭，达拉斯寄宿家庭</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="includes/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="csslonestar.css">
    <link rel="icon" href="images/lonestarping.png">
</head>
<body>
<div id="banner">
    <div id="fadedscreen"></div>
    <div id="topmenubar"><a href="#">首页</a><a href="#">关于我们</a> <a href="#">寄宿家庭</a> <a href="#">城市</a> <a href="#">学校</a> <a href="#">费用</a>  <a href="#">监护人</a> <a href="#">暑期班</a> <a href="#">联系</a><a href="#">联系</a>  <a href="#">English</a>    </div>
    <div id="text0" class="bannertext">认识新的朋友 0</div>
    <div id="text1" class="bannertext">暑期班 - 英语课 1</div>
    <div id="text2" class="bannertext">美国德州 - 高质量寄宿家庭 2</div>
    <div id="text3" class="bannertext">轻松的玩 3</div>
    <div id="text4" class="bannertext">了解一下我们的城市 4</div>

    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>

    </div>
</div>


<script>

    function rotateimages(){

        var currentimage = $("#banner").css('background-image');
//        alert(currentimage);
        var firstsplit = currentimage.split('images/');
//        alert(firstsplit[0] + " and the second part " + firstsplit[1]);
// http://localhost:8888/lonestar-hosting.net/ (images)
        var secondsplit = firstsplit[1].split('.');
//        alert(secondsplit[0]);
        var currnum = secondsplit[0];

        currnum = parseInt(currnum);
        var imgUrl ;

        if (currnum == 4){
//            'url(' + imageUrl + ')');
            $("#banner").css('background-image', 'url(images/0.jpg');
//            $("#banner").css('background-image', "url('http://localhost:8888/lonestar-hosting.net/images/0.jpg')");
            $("#text1").css('display', 'none');
            $("#text2").css('display', 'none');
            $("#text3").css('display', 'none');
            $("#text4").css('display', 'none');
            $("#text0").css('display', 'block');

            return;
        }
        // WARNING! originally i was concatenating this into a string
        // ie it was not adding one to currnum ... it was creating a string like this: 01.jpg
        // and since that file did not exist, it showed a blank screen ...
        currnum = currnum + 1;
        imgUrl = "images/" + currnum + ".jpg";

//        imgstr = "url('http://localhost:8888/lonestar-hosting.net/images/" + currnum + ".jpg')";
        $("#banner").css('background-image', 'url(' + imgUrl + ')')   ;
//        var currentimage = $("#banner").css('background-image');
//        alert(currentimage);
//        $("#banner").css('background-image', imgstr);

        if (currnum == 1){

            $("#text0").css('display', 'none');
            $("#text1").css('display', 'block');
        }
        if (currnum == 2){

            $("#text1").css('display', 'none');
            $("#text2").css('display', 'block');
        }
        if (currnum == 3){

            $("#text2").css('display', 'none');
            $("#text3").css('display', 'block');
        }
        if (currnum == 4){

            $("#text3").css('display', 'none');
            $("#text4").css('display', 'block');
        }

        // ... end function rotateimages()
    }

    // determine which banner background image is currently showing,
    // then increment it to implement the "switch" effect
    function checkcurrentorder(){

        // get the bckgrnd img file name

        // split it at the "."

        // obtain the first part of that newly split string

        // obtain the last character of the first part

        // check to see if that last character (which is also an integer)
        // is the last guy in line, if yes, then assign it back to zero
    }

    $(document).ready(function(){

//        var choices = ["a","b","c"];
//        alert("first load " + choices[0]);
        // set timer function on 3 seconds to a function
        setInterval("rotateimages()", 5000);
        // function will change background



    });

</script>

</body>

</html>
