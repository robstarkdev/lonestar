<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>美国, 德州, 寄宿家庭，达拉斯寄宿家庭, 在美国留学，</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="includes/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="cssindexnew.css">
    <link rel="stylesheet" type="text/css" media="screen" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="cssmobile.css">
    <link rel="icon" href="images/lonestarping.png">

</head>
<body>

<?php include "inctopmenubar.php";   ?>
<?php include "incmobilemenutop.php";   ?>


<div class="basicpageheader" id="pagehosting">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>


<div class="pagetextpicfloat">

    <div class="boxwithtextandpic">

        <img src="images/homefamily5.jpg" class="floatpic stdpicspruceup">
        我们所选取的寄宿家庭都和我们极其熟悉。在德州北部，我们所合作的家庭都是有数量限制的，因为本身住在这里，我们的个人关系也比较好。所有的家庭均是能照顾孩子的高素质人群。对于深处在一个不同社会以及语言环境的孩子来说，他们能够提供最好的指导和建议。<br><br>
        寄宿家庭本身是非常大和宽敞的。您的还在所住的房间会非常舒适并且空间足够。其中很多家庭还提供特定的场所可供孩子学习与休闲玩耍。对于家庭的位置，我们也是精选安全的街区。您的孩子将会住在犯罪率低的安全街区。
        此页面所展示的图片均为实景。


    </div>

</div>

<div class="pagetextpicfloat">

    <div class="boxlineofpics wrapper" style="padding-left: 44px;">

        <img src="images/homefamily2.jpg" class="lineofpics stdpicspruceup">
        <img src="images/house4.jpg" class="lineofpics stdpicspruceup">
        <img src="images/homefamily6.jpg" class="lineofpics stdpicspruceup">



    </div>

</div>

<div class="pagetextpicfloat">

    <div class="boxlineofpics wrapper" style="width: 700px;">

        <img src="images/pianoandcouch.jpg" class="lineofpics stdpicspruceup">
        <img src="images/mealtogether.jpg" class="lineofpics stdpicspruceup">
        <img src="images/twogirls.jpg" class="lineofpics stdpicspruceup">

    </div>

</div>



<div class="mobilestriptext">

    <div class="mobilestriptextcontainer">
        我们所选取的寄宿家庭都和我们极其熟悉。在德州北部，我们所合作的家庭都是有数量限制的，因为本身住在这里，我们的个人关系也比较好。所有的家庭均是能照顾孩子的高素质人群。对于深处在一个不同社会以及语言环境的孩子来说，他们能够提供最好的指导和建议。<br><br>
        寄宿家庭本身是非常大和宽敞的。您的还在所住的房间会非常舒适并且空间足够。其中很多家庭还提供特定的场所可供孩子学习与休闲玩耍。对于家庭的位置，我们也是精选安全的街区。您的孩子将会住在犯罪率低的安全街区。
        此页面所展示的图片均为实景。
    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/homefamily5.jpg" class="mobilestrippic stdpicspruceup" style="margin-bottom: 10px;"></div>
    <div class="mobilestripimagecontainer"><img src="images/pianoandcouch.jpg" class="mobilestrippic stdpicspruceup"></div>

</div>



<?php include "incfooter.php";   ?>
<?php include "incmobilefootermenu.php";   ?>


<script>
    $(document).ready(function(){


        $("#mobilemenutop").click(function (){

            $("#mobilemenutop").css("display", "none");
            $("#mmitems").css("display", "inline-block");

        });


        $("#closeitems").click(function (){

            $("#mobilemenutop").css("display", "inline-block");
            $("#mmitems").css("display", "none");

        });
     // ... end document ready function
    });

</script>

</body>
</html>



