<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chinese Student Hosting in Texas, Plano, Dallas, Fort-Worth, Richardson</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="includes/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="encssindexnew.css">
    <link rel="stylesheet" type="text/css" media="screen" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="encssmobile.css">
    <link rel="icon" href="images/lonestarping.png">

</head>
<body class="homepage">

<?php include "eninctopmenubar.php";   ?>

<?php include "enincmobilemenutop.php";   ?>

<div id="slider">


    <div id="fadedscreen"></div>
    <div id="boxzero" class="box current"></div>
    <div id="boxone" class="box waiting"></div>
    <div id="boxtwo" class="box waiting"></div>
    <div id="boxthree" class="box waiting"></div>
    <div id="boxfour" class="box waiting"></div>

    <div id="text0" class="bannertext currenttext">North Texas Schools</div>
    <div id="text1" class="bannertext waitingtext">Summer English Camp</div>
    <div id="text2" class="bannertext waitingtext">High-Quality Homes/Families</div>
    <div id="text3" class="bannertext waitingtext">Play Basketball Like a Local!</div>
    <div id="text4" class="bannertext waitingtext">Get to Know Our Cities</div>

    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

<!-- ... end slider div -->
</div>

<div id="introtext">

    <div id="introcontentbox">
        We offer homestay opportunities for Chinese foreign exchange students who will be attending either high schools or colleges/universities in Texas.  We ourselves live in north Texas and know the area and its schools well. We take the utmost care in ensuring that the family, school and neighborhood where your child resides and studies is safe and secure.  Some areas in Texas, California and New York are dangerous and have high crime rates.  Your child will be fully removed and separated from those areas.  Again, we know these neighborhoods, schools and families personally, and can guarantee that there is no safer place for your child to live and learn about America.



    </div>

    <!-- ... end introtext div    -->
</div>

<div class="mobilestriptext">

    <div class="mobilestriptextcontainer">
        We offer homestay opportunities for Chinese foreign exchange students who will be attending either high schools or colleges/universities in Texas.  We ourselves live in north Texas and know the area and its schools well. We take the utmost care in ensuring that the family, school and neighborhood where your child resides and studies is safe and secure.  Some areas in Texas, California and New York are dangerous and have high crime rates.  Your child will be fully removed and separated from those areas.  Again, we know these neighborhoods, schools and families personally, and can guarantee that there is no safer place for your child to live and learn about America.

    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/house1.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>

<div id="threeboxescontainer">

    <div id="threeboxesinset">
     <!-- in addition to the other layout-related styles, remember to float these three
            to the left ... that was key here .. -->
       <a href="enabout.php"><div class="callout">
               <i class="fa fa-handshake-o fa-4x callouticon" style="color: blue"></i>
               <div class="callouttext">Reliable Texas Locals Choose the Best Families</div>


           </div></a>

        <a href="encities.php"><div class="callout">
                <i class="fa fa-home fa-4x callouticon" id="callouticonhome" style="color: darkred"></i>
                <div class="callouttext">Safe Neighborhoods and Top-Notch Homes</div>


            </div></a>

        <a href="enhosting.php"><div class="callout">
                <i class="fa fa-users fa-4x callouticon" style="color: green" id="callouticonusers"></i>
                <div class="callouttext">Deep Knowledge of Each Host Family</div>

            </div></a>

    </div>

</div>

<div id="introtext2">

    <div id="introcontentbox2">Most of the schools which our students attend are Christian-based and hold local and foreign students alike to a high set of moral and ethical standards.  We encourage you to view the schools page (just click the “Schools” menu item at the top of the page) to get an idea of what sort of schools your child will be attending.  All of our featured schools have their own detailed websites which explain their own history and traditions.<br><br>

        We currently have five different (5) homes available and we are extremely familiar with all the details of the families, neighborhoods and schools.  All of these host families/homes are located in cities in the Dallas/Fort Worth area of north Texas.  Unlike other hosting services, we are focussed on Texas and in particular north Texas.  We know the area extremely well because we live here!  Please contact us at any time and ask as many questions as you wish: we’re here to help!

    </div>

    <!-- ... end introtext div    -->
</div>

<div class="mobilestriptext">

    <div class="mobilestriptextcontainer">
        Most of the schools which our students attend are Christian-based and hold local and foreign students alike to a high set of moral and ethical standards.  We encourage you to view the schools page (just click the “Schools” menu item at the top of the page) to get an idea of what sort of schools your child will be attending.  All of our featured schools have their own detailed websites which explain their own history and traditions.<br><br>

        We currently have five different (5) homes available and we are extremely familiar with all the details of the families, neighborhoods and schools.  All of these host families/homes are located in cities in the Dallas/Fort Worth area of north Texas.  Unlike other hosting services, we are focussed on Texas and in particular north Texas.  We know the area extremely well because we live here!  Please contact us at any time and ask as many questions as you wish: we’re here to help!

    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/homefamily5.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>

<div id="housestrip">

    <div id="housestripinset">

        <a href="enhosting.php"><div class="housebox" id="firsthousebox"></div></a>
        <a href="enhosting.php"><div class="housebox" id="secondhousebox"></div></a>
        <a href="enhosting.php"><div class="housebox" id="thirdhousebox"></div></a>
        <a href="encities.php"><div class="housebox" id="thefourthhousebox"><div id="fadedscreenhousebox" style="color: white;">Safe Cities</div></div></a>
        
    </div>


</div>

<?php include "enincfooter.php";   ?>

<?php include "enincmobilefootermenu.php";   ?>


<script>
    function rotateimages(){

        $(".box").css("visibility", "visible");
//        $( "div.current" ).next().css( "", "red" );
        var switchaxis = $(".current") ;

        var myid = switchaxis.attr("id");

        
        if (myid == "boxfour"){
            // we can't use next() we need to manually set the classes and
            // restart the order ...
            $("#boxzero").addClass("current").removeClass("waiting");
            switchaxis.addClass("waiting").removeClass("current");
            return ;
        }

//        alert(myid);
        switchaxis.next().addClass("current").removeClass("waiting");
        switchaxis.removeClass("current");
        switchaxis.addClass("waiting");

//        $( "div.current" ).next().addClass("current");
        // note that when it gets to the lasat div element ... there are no longer any
        // sibling elements to be sought by the .next() method ... so it will result in
        // "undefined" ...


    }

    function rotatetext (){

        var switchaxistext = $(".currenttext") ;
        var myidtext = switchaxistext.attr("id");
//        alert(myidtext);
        if (myidtext == "text0"){
            // we can't use next() we need to manually set the classes and
            // restart the order ...
            $("#text1").addClass("currenttext").removeClass("waitingtext");
            switchaxistext.addClass("waitingtext").removeClass("currenttext");
            return ;
        }
        if (myidtext == "text1"){
            // we can't use next() we need to manually set the classes and
            // restart the order ...
            $("#text2").addClass("currenttext").removeClass("waitingtext");
            switchaxistext.addClass("waitingtext").removeClass("currenttext");
            return ;
        }
        if (myidtext == "text2"){
            // we can't use next() we need to manually set the classes and
            // restart the order ...
            $("#text3").addClass("currenttext").removeClass("waitingtext");
            switchaxistext.addClass("waitingtext").removeClass("currenttext");
            return ;
        }
        if (myidtext == "text3"){
            // we can't use next() we need to manually set the classes and
            // restart the order ...
            $("#text4").addClass("currenttext").removeClass("waitingtext");
            switchaxistext.addClass("waitingtext").removeClass("currenttext");
            return ;
        }
        if (myidtext == "text4"){
            // we can't use next() we need to manually set the classes and
            // restart the order ...
            $("#text0").addClass("currenttext").removeClass("waitingtext");
            switchaxistext.addClass("waitingtext").removeClass("currenttext");
            return ;
        }

        // ... end function rotatetext()
    }


    $(document).ready(function(){

//        var choices = ["a","b","c"];
//        alert("first load " + choices[0]);
// set timer function on 3 seconds to a function
        setInterval("rotateimages()", 5000);
        setInterval("rotatetext()", 5000);
// function will change background


        $("#mobilemenutop").click(function (){

            $("#mobilemenutop").css("display", "none");
            $("#mmitems").css("display", "inline-block");

        });


        $("#closeitems").click(function (){

            $("#mobilemenutop").css("display", "inline-block");
            $("#mmitems").css("display", "none");

        });




    });
</script>


</body>

</html>