<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How much does it cost to live with a homestay family? Fees, Prices, and Costs for International Student Hosting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="includes/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="encssindexnew.css">
    <link rel="stylesheet" type="text/css" media="screen" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="encssmobile.css">
    <link rel="icon" href="images/lonestarping.png">

</head>
<body>

<?php include "eninctopmenubar.php";   ?>
<?php include "enincmobilemenutop.php";   ?>


<div class="basicpageheader" id="pagefees">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>


<div class="pagetextpicfloat">

    <div class="boxwithtextandpic">

        <i class="fa fa-5x fa-phone-square" style="color: blue; float: right;"></i>
        Each family has different needs for their child and a different budget.  Furthermore, the options and choices that are available to you can be significantly different.  Please contact us at any time that is convenient for you and we would be extremely happy to discuss the details of our fees and costs with you.

        It is not right to set a flat fee that is the same for every single student.  Ultimately, that will result in poor service.  So we don’t do it!  Again, we will discuss with you all the details of each and every choice that is available to you. (<a href="contact.php">Contact Page</a>）


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
        Each family has different needs for their child and a different budget.  Furthermore, the options and choices that are available to you can be significantly different.  Please contact us at any time that is convenient for you and we would be extremely happy to discuss the details of our fees and costs with you.

        It is not right to set a flat fee that is the same for every single student.  Ultimately, that will result in poor service.  So we don’t do it!  Again, we will discuss with you all the details of each and every choice that is available to you. (<a href="contact.php">Contact Page</a>）
    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/mapwhereistexas.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>




<?php include "enincfooter.php";   ?>
<?php include "enincmobilefootermenu.php";   ?>


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



