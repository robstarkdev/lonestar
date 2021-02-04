<?php session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ispostrequest = true;
    $codeiscorrect = false;

} else {

    $ispostrequest = false;
    $codeiscorrect = false;
}



if (isset($_POST['send'])){

    $ispostrequest = true;


    if($_SESSION['phrase'] == $_POST['phrase']) {
        // instructions if user phrase is good

        $codeiscorrect = true;



        require 'vendor/autoload.php';


        try {


//$ms = new Swift_Message()

            // you can also use a static method
            // he does it so that you can chain "commands" onto the back of it ... here ...
            // rather than trying to remember the correct order of all the arguments to the function
            // he simply goes down a line and starts using the arrow operator to invoke methods,
            // chain methods onto it ... this way you can use "method chaining" ..
            // with regards to the setfrom method: you can just provide a string as the email, or ..
            // perhaps more professionally ... you can pass in an associative array containing the name
            // and then email address ..
            // when you choose the recipient address (that is: the person to whom you want to send the email) you
            // have two options: addto(), or setto() ...
            // you can make multiple calls to the addto() method .. but if you do this each person will be
            // able to see who the other recipients were ..
            // if you want to use setto() to send to multiple recipients you must supply that list as an array
            // to the setto method ...

            $name = $_POST['name'];
            $visitoremail = $_POST['visitoremail'];
            $telephone = $_POST['telephone'];
            $comments = $_POST['comments'];


            $subject = "Website Contact From: " . $name      ;
            $bodycontent = "Details regarding this site visitor's enquiry:  \n" .

                "Name: " . $name . "\n" .
                "Email: " . $visitoremail . "\n" .
                "Telephone: " . $telephone . "\n" .
                "Concerns, questions etc. they have: " . $comments . "\n\n" ;


            $message = Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom(['dennis@lonestar-hosting.net' => 'Email from Website Contact Form'])
                ->addTo('lonestarhosting@yahoo.com')
                ->addTo('dennis@lonestar-hosting.net')
//        ->addTo('bilingualshenzhen@163.com')

//        ->setTo('robert@americantranslatorinshenzhen.com')
                ->setBody($bodycontent);

            // you can use the tostring() method to check out exactly what is going to be sent
            // $message->tostring();
            // then go to the page in a browser and hit view source .. then you can look at the nitty gritty
            // of what is going to be sent including encoding and mime version etc....
            // swiftmailer atuomatically creates a series of headers ...

            // for my mothership account I set up a password as "olddungeonsanddragonscharacterboeing"
            // and the username is robert@americanhostinginhongkong.com
            $mailservername = 'mail.lonestar-hosting.net';
            $emailusername = 'dennis@lonestar-hosting.net';
            $emailpassword = 'dennis8481';
            $transport = Swift_SmtpTransport::newInstance($mailservername, 465, 'ssl')
                // ports to try: 465, 110, 993, 995, 143, 25
                // usually i get these errors: Timed out, or
                // 110 gives me= "Expected response code 220 but got code "", with message "+OK Dovecot ready. "
                //993= timed out
                // port 25 is the default unencrypted connection port ...
                // most servers use port 465 for encrypted connections ...
                // you can see the two differences in arguments passed to the constructor method:
//    $transport = Swift_SmtpTransport::newInstance($mailservername, 25)
                // you can use the checkssl() function i wrote to see what types of
                // encryption are available

                ->setUsername($emailusername)
                ->setPassword($emailpassword);

            $mailer = Swift_Mailer::newInstance($transport);

//    你好，不怎么有时间上网，方便的话加QQ或是微信联系吧455088101


            // the mailer send() will return the number of emails it sent successfully ...
            // so below it we can test for the "truthy" value of result and proceed accordingly ...
            $result = $mailer->send($message);

            if ($result){
                // the line below is just for testing ..
                // i take it out in production ..
                // echo "Number of emails sent: $result ";

            }else{
                echo "could not send email ...";
            }


        } catch (Exception $e){

            echo $e->getMessage() . "<br>";

        }

    }
    else {
        // user phrase is wrong
        $ispostrequest = true;

        $codeiscorrect = false;

    }


    //password_hash($password, $PASSSWORD_DEFAULT); ... this returns a string: the hash string of the pword
    //password_verify($password, $existing_hashStr); .. this returns true if their is a hash match
    //                                                   and false if not


} //end code block that executes if the post login value is set ...this code executes only on posting to the page



require 'vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();

$_SESSION['phrase'] = $builder->getPhrase();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Hosting in North Texas, Plano, TX Homes and Apartments for International Students, Students from China</title>
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


<div class="basicpageheader" id="pagecontact">



    <div id="upperleftlogobox">
        <div id="upleftlogopic"><img id="logoimage" src="images/logofinal.png"></div>
    </div>

</div>


<div class="pagetextpicfloat">
    <?php // start captcha success boolean div

    // essentially, you can insert this snippet whereever you want
    // the green or red retangle div to appear and alert the user
    // as to whether the code they entered was correct

    if (!$codeiscorrect && $ispostrequest){

        include 'wrongcaptchacode.php';

        echo "<br>";

    }

    // end captcha success boolean div
    ?>

    <div class="boxwithtextandpic" id="boxwithtextandpicsumcamp">


        Our main offices are in Shenzhen and Plano, Texas.  We also have a representative in Beijing. The owner of the company lives part-time in Shenzhen.  If you live in the Shenzhen or Beijing area we would love to meet with you in person to discuss your plans and give you a clear idea of the many opportunities you can find through us.


    </div>

</div>

<div class="mobilestriptext">

    <?php // start captcha success boolean div

    // essentially, you can insert this snippet whereever you want
    // the green or red retangle div to appear and alert the user
    // as to whether the code they entered was correct

    if (!$codeiscorrect && $ispostrequest){

        include 'wrongcaptchacode.php';

        echo "<br>";

    }

    // end captcha success boolean div
    ?>

    <div class="mobilestriptextcontainer">
        Our main offices are in Shenzhen and Plano, Texas.  We also have a representative in Beijing. The owner of the company lives part-time in Shenzhen.  If you live in the Shenzhen or Beijing area we would love to meet with you in person to discuss your plans and give you a clear idea of the many opportunities you can find through us.
    </div>

</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/sharonNewcontactfinal.png" class="mobilestrippic stdpicspruceup"></div>


</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/sharonwechatgraphic.png" class="mobilestrippic stdpicspruceup"></div>


</div>

<div class="mobilestrip">

    <div class="mobilestripimagecontainer"><img src="images/davidfucontact.jpg" class="mobilestrippic stdpicspruceup"></div>


</div>


<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/sharonNewcontactfinal.png" id="feespagemapoftexas">
    </div>


</div>

<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/sharonwechatgraphic.png" id="feespagemapoftexas">
    </div>


</div>




<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/davidfucontact.jpg" id="feespagemapoftexas">
    </div>


</div>

<div class="pagetextpicfloat contactform">

    <div  id="boxwithtextandpiccontactform" class="boxwithtextandpic contactform">

        <?php // start captcha success boolean div

        // essentially, you can insert this snippet whereever you want
        // the green or red retangle div to appear and alert the user
        // as to whether the code they entered was correct

        if (!$codeiscorrect && $ispostrequest){

            include 'wrongcaptchacode.php';

            echo "<br>";

        }

        // end captcha success boolean div
        ?>
        <form id="formlogin" name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

            <label style="color: darkblue;" for="name">Name:</label>
            <input class="form-control basictextbox" name="name" type="text" size=15 id="name"> <br>
            <label style="color: darkblue;" for="visitoremail">Email:</label>
            <input class="form-control basictextbox" name="visitoremail" type="text" size=15 id="visitoremail">&nbsp;&nbsp;

            <br>
            <label style="color: darkblue;" for="telephone">Telephone:</label>
            <input class="form-control basictextbox" name="telephone" type="text" size=15 id="telephone">&nbsp;&nbsp;
            <br>




            <label style="color: darkblue;" for="comments">Comments and Questions:</label><br>
            <textarea class="form-control" name="comments" id="comments" cols=50 rows=10></textarea>

            <br>

            <img src="<?php echo $builder->inline(); ?>" /> <br>

            <label style="color: darkblue;" for="phrase">Please enter the code shown above:</label>
            <input class="form-control basictextbox" name="phrase" type="text" size=10 id="phrase">
            <br>

            <!--                      btn was originally set with class: pull-right           -->
            <input class="btn btn-default" type="submit" name="send" value="Send" id="send">

            <br><br>

        </form>

        <?php // start captcha success boolean div

        // essentially, you can insert this snippet whereever you want
        // the green or red retangle div to appear and alert the user
        // as to whether the code they entered was correct

        if (!$codeiscorrect && $ispostrequest){

            include 'wrongcaptchacode.php';

            echo "<br>";

        }

        // end captcha success boolean div
        ?>

    </div>

</div>


<div class="pagetextpicfloat">

    <div id="boxformapoftexasonfeespage">
        <img src="images/citiesmkinney.jpg" id="feespagemapoftexas">
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



