<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Local Texans Providing Homestays for International Students</title>
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


<div class="basicpageheader" id="pageabout">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>

<div class="mobilestriptext">

    <div class="mobilestriptextcontainer">
        As local Texas residents we take pride in our local traditions and culture.  We want your child to learn about the best of what America has to offer from both a material and spiritual/moral perspective.  We have offices in Shenzhen, Beijing, China and Plano, Texas.
        <br><br>
        <strong>Dennis Prose</strong><br>
        Dennis is a local Texas man who lives in north Texas, but spends a substantial amount of time each year in Shenzhen, China.  He knows Texas and local Texas people very well.  Being familiar with every detail concerning both his host families and their homes/properties enables him to easily answer any questions you might have regarding our programs and homestay families.  Dennis was born and raised in America, he knows what the normal market price is for renting homes and what local Americans in Texas can offer Chinese foreign exchange students.  He chooses only the best most reliable examples for your children to learn from and live with during their high school and college lives in America.<br><br>

        <strong>Sharon Gu</strong><br>
        Sharon is a Chinese who often travels to Texas to facilitate Lonestar’s housing and student programs.  She speaks fluent English and is actively involved in the study-abroad industry.  Obviously, she is a native Chinese speaker so communicating with her will be of the utmost ease for you.  Also important is the fact that she has personally visited our homes, and met the family members with whom your child will be staying.  For her there is nothing theoretical about what she arranges for you: she herself regularly goes to north Texas to do business and make arrangements for our students!

        <br><br>

        <strong>David Fu</strong><br>
        David is from China, and he is our representative in Beijing. He will gladly meet with families in the Beijing area (or in other areas of Northern China if you make personal arrangements with him in advance) about their plans to have their children study in the United States.  He will discuss any questions you may have regarding our homes, families and neighborhoods or about the process in general.



    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/aboutpicmain.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>

<div class="pagetextpicfloat">

    <div class="boxwithtextandpic" id="boxwithtextandpicsumcamp">

        <img src="images/aboutpicmain.jpg" class="floatpic stdpicspruceup" id="mainaboutpic">
        As local Texas residents we take pride in our local traditions and culture.  We want your child to learn about the best of what America has to offer from both a material and spiritual/moral perspective.  We have offices in Shenzhen and Beijing, China and Plano, Texas.
        <br><br>
        <strong>Dennis Prose</strong><br>
        Dennis is a local Texas man who lives in north Texas, but spends a substantial amount of time each year in Shenzhen, China.  He knows Texas and local Texas people very well.  Being familiar with every detail concerning both his host families and their homes/properties enables him to easily answer any questions you might have regarding our programs and homestay families.  Dennis was born and raised in America, he knows what the normal market price is for renting homes and what local Americans in Texas can offer Chinese foreign exchange students.  He chooses only the best most reliable examples for your children to learn from and live with during their high school and college lives in America.<br><br>

        <strong>Sharon Gu</strong><br>
        Sharon is a Chinese who often travels to Texas to facilitate Lonestar’s housing and student programs.  She speaks fluent English and is actively involved in the study-abroad industry.  Obviously, she is a native Chinese speaker so communicating with her will be of the utmost ease for you.  Also important is the fact that she has personally visited our homes, and met the family members with whom your child will be staying.  For her there is nothing theoretical about what she arranges for you: she herself regularly goes to north Texas to do business and make arrangements for our students!<br><br>

        <strong>David Fu</strong><br>
        David is from China, and he is our representative in Beijing. He will gladly meet with families in the Beijing area (or in other areas of Northern China if you make personal arrangements with him in advance) about their plans to have their children study in the United States.  He will discuss any questions you may have regarding our homes, families and neighborhoods or about the process in general.

    </div>

</div>



<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/mapwhereistexas.jpg" id="feespagemapoftexas">
    </div>


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



