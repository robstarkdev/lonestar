<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chinese International Student Hosting and Homestay Families in North Texas, Plano, Dallas</title>
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


<div class="basicpageheader" id="pagehosting">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>


<div class="pagetextpicfloat">

    <div class="boxwithtextandpic">

        <img src="images/homefamily5.jpg" class="floatpic stdpicspruceup">
        Our host families are all extremely well-known to us.  We have a limited number of homes/families that we deal with in north Texas, and we live there ourselves, so we know all of them personally. All of our families are high-caliber educated people who look after the children that stay with them.  They are able to provide caring advice and guidance to students who are dealing with a very new (and often strange) social and linguistic environment.<br><br>

        The homes themselves are all large and spacious.  The rooms in which your children/teenagers will stay are very comfortable and give them more than enough room to feel at home.  Many of the homes where our Chinese students stay also have special areas where they can study or play/relax. We also have selected only homes which are located in safe neighborhoods.  Your child will be safe living in these areas where crime is very low.<br><br>

        The pictures on this page are from actual real homes which we arrange our students to stay in.


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
        Our host families are all extremely well-known to us.  We have a limited number of homes/families that we deal with in north Texas, and we live there ourselves, so we know all of them personally. All of our families are high-caliber educated people who look after the children that stay with them.  They are able to provide caring advice and guidance to students who are dealing with a very new (and often strange) social and linguistic environment.<br><br>

        The homes themselves are all large and spacious.  The rooms in which your children/teenagers will stay are very comfortable and give them more than enough room to feel at home.  Many of the homes where our Chinese students stay also have special areas where they can study or play/relax. We also have selected only homes which are located in safe neighborhoods.  Your child will be safe living in these areas where crime is very low.<br><br>

        The pictures on this page are from actual real homes which we arrange our students to stay in.
    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/homefamily5.jpg" class="mobilestrippic stdpicspruceup" style="margin-bottom: 10px;"></div>
    <div class="mobilestripimagecontainer"><img src="images/pianoandcouch.jpg" class="mobilestrippic stdpicspruceup"></div>

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



