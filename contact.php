<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在美国德克萨斯州，寄宿家庭公司，提供留学生住宿, 留学生公寓</title>
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


<div class="basicpageheader" id="pagecontact">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>


<div class="pagetextpicfloat">

    <div class="boxwithtextandpic" id="boxwithtextandpicsumcamp">


        我们深圳设有办公室，并且负责人时常住在深圳。如果您也住在深圳，我们非常乐意与您当面详谈适合您孩子的计划并给出最有针对性的建议。


    </div>

</div>

<div class="mobilestriptext">

    <div class="mobilestriptextcontainer">
        我们深圳设有办公室，并且负责人时常住在深圳。如果您也住在深圳，我们非常乐意与您当面详谈适合您孩子的计划并给出最有针对性的建议。
    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/contactgraphicfinal.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/davidfucontact.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>

<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/contactgraphicfinal.jpg" id="feespagemapoftexas">
    </div>


</div>
<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/davidfucontact.jpg" id="feespagemapoftexas">
    </div>


</div>


<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/citiesmkinney.jpg" id="feespagemapoftexas">
    </div>


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



