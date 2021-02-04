<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>达拉斯寄宿家庭：费用多少？ 在美国留学，美国德州的学费多少钱？</title>
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


<div class="basicpageheader" id="pagefees">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>


<div class="pagetextpicfloat">

    <div class="boxwithtextandpic">

        <i class="fa fa-5x fa-phone-square" style="color: blue; float: right;"></i>
        不同的家庭需求不一样，所设的预算也不同。并且寄宿家庭所提供的选项和服务也会有明显不同。请随时联系我们，我们非常乐意与您详细探讨有关问题。

        为每个学生设置均价显然是不妥的做法，并且最终会导致服务水平下降。因此我们不设置均价！我们只设计出适合您的方案。(<a href="contact.php" class="lianxifangshi">联系方式</a>）


    </div>

</div>

<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/mapwhereistexas.jpg" id="feespagemapoftexas">
    </div>


</div>

<div class="mobilestriptext">

    <div class="mobilestriptextcontainer">
        <i class="fa fa-5x fa-phone-square" style="color: blue; float: right;"></i>
        不同的家庭需求不一样，所设的预算也不同。并且寄宿家庭所提供的选项和服务也会有明显不同。请随时联系我们，我们非常乐意与您详细探讨有关问题。

        为每个学生设置均价显然是不妥的做法，并且最终会导致服务水平下降。因此我们不设置均价！我们只设计出适合您的方案。(<a href="contact.php">联系方式</a>）
    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/mapwhereistexas.jpg" class="mobilestrippic stdpicspruceup"></div>


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



