<? 

include "header.php";

$errormg = true;
$errornm = true;
$errorverification = true;

if(isset($_POST['g-recaptcha-response'])){

  $secretKey = "6Ldqsf8ZAAAAAKhJktFZw4uwb7_QNHyWIj5kKkf0";
  $ip= $_SERVER['REMOTE_ADDR'];
  $responseKey = $_POST['g-recaptcha-response'];
  $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$ip";
  $response = file_get_contents($url);
  $response = json_decode($response);

  if($response->success)
    $errorverification = true;
  else{
    $errorverification = false;
    echo "</br></br></br></br>"."</br> Error !!!";
  }
    

  //--------------------------
    $Fname = filter_var( $_POST['username'],FILTER_SANITIZE_STRING);
    $Lname = filter_var( $_POST['lastusername'],FILTER_SANITIZE_STRING);
    $email = filter_var( $_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone = filter_var( $_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $msg = filter_var( $_POST['msg'],FILTER_SANITIZE_STRING);
    $error_message=array();
   
    if(strlen($Fname) <=3 ){
      $error_message= "First name most be larger than 3 charcters";
      $errornm = true;
    }else{
      $errornm = false;
    }

    if(strlen($msg) <= 10 ){
      //$error_message= "Message most be larger than 10 charcters";
      $errormg = true;
    }else{
      $errormg = false;
    }

    //if no errors

    $header = 'From: '. $email .'\r\n';
    $myEmail ='zettazone24@gmail.com';
    $subject = 'Contact Form';

    

    if(empty($error_message) && $errorverification == true){

      /*echo $Fname."</br>".$msg;
      echo $errornm."</br>".$errormg;
      /*if(mail($myEmail,$subject,$msg,$header)){
        $Fname = '';
        $Lname = '';
        $email = '';
        $phone = '';
        $msg = '';
      }else{
        echo "there is an Error";
      }*/

      $Fname = '';
        $Lname = '';
        $email = '';
        $phone = '';
        $msg = '';
     ?>

  <?  }
  }
?> 

<!------- Home Section -------->

 <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Charity</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="service.php">SERVICES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="project.php">PROJECTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="contact.php">CONTACT</a>
        </li>
      
      </ul>
    </div>
  </nav>




<!------- Contact Section -------->

<section class="introcontact">
    <div class="container inner">
      <h2 class="title">CONTACT US</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, maiores.<br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    </div>
  </section>
<!------- Our iNFO Section -------->

<section class="ourinfo">
  <div class="container">
    <div class="row">
          <div class="col-md-4">
            <h3 class="title">Our Informtion</h3>
            <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque dolor perferendis ad velit non labore expedita qui? Porro, architecto maxime.</P>
            <P>Eaque dolor perferendis ad velit non labore expedita qui? Porro, architecto maxime.</P>
            <P>Eaque dolor ad architecto maxime.</P>

            <ul class="contact-info">
              <li><i class="fas fa-location-arrow fa-2x"></i>lorem 2th Street, lorem , ipsum</li>
              <li><i class="fas fa-phone fa-2x"></i>+ 1111 1111 111</li>
              <li><i class="fas fa-envelope fa-2x"></i><a href="#">info@loremsite.com</a></li>
              <li><i class="fas fa-globe fa-2x"></i><a href="#">www.loremsite.com</a></li>
            </ul>
          </div>

          <div class="col-md-8">
            <form action="contact.php" method="POST" class="contact-form">
              <div class="form-group row">
                <div class="col-md-6 field">
                  <label for="firstname">First Name</label>
                  <input type="text" id="firstname" class="form-control username" 
                  name="username" value="<?php if(isset($Fname)) echo $Fname;?>" >
                  <div class="alert alert-danger custom-alert">
                    First name most be larger than 3 charcters
                  </div>
                </div>
                <div class="col-md-6 field">
                  <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" class="form-control lastusername"
                  name="lastusername" value="<?php if(isset($Lname)) echo $Lname;?>">
                  <div class="alert alert-danger custom-alert">
                    Last name can't be empty
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 field">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control email"
                  name="email" value="<?php if(isset($email)) echo $email;?>">
                  <div class="alert alert-danger custom-alert">
                    Email can't be empty
                  </div>
                </div>
                <div class="col-md-6 field">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control"
                  name="phone" value="<?php if(isset($phone)) echo $phone;?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 field">
                  <label for="message">Message</label>
                  <textarea id="message" cols="30" rows="7" class="form-control msg"
                  name="msg"></textarea> <!----------V placeholder="<?php //if(isset($msg)) echo $msg;?>" --------------->
                  <div class="alert alert-danger custom-alert">
                    Message most be larger than 10 charcters
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 field recaptcha">
                  <div class="g-recaptcha" data-sitekey="6Ldqsf8ZAAAAAJQfxN_ggXU-FrOBamRyvvYncWYT"></div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 field submitdiv">
                  <input type="submit" id="submit" name="send" class="btn" value="Send Message">
                </div>
              </div>
              <?
              if( $errormg == false && $errornm == false ) {
                if($errorverification == true){?>
              <div class="form-group row">
                <div class="col-md-12 field alertmsg">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> Your Message was Sent Successfully.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                </div>
              </div>
              <? }else{ ?>
                <div class="form-group row">
                <div class="col-md-12 field alertmsg">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed! </strong> Please Check reCAPTCHA.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                </div>
              </div>
              <? }
                   }?>
            </form>
          </div>

    </div>
   
  </div>

  <div id="map" class="mapdiv"></div>
</section>


<!------- Footer Section -------->
<? 

include "footer.php"

?> 

<script>
console.log(5 + 6);

</script>

