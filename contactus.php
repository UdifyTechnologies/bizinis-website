<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Contact Us Bizinis - Landing Page</title>

    <meta name="keywords" content="BIZINIS" />
    <meta name="description" content="BIZINIS">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.svg" sizes="16x16 32x32 48x48 64x64">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/datepicker.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
// 	function onfun(){
// const form = document.querySelector('form');
// const msgshow = document.getElementById('showmsg');
// form.addEventListener('submit', (e) => {
//   e.preventDefault();
// if (msgshow.style.display === "none") {
//     msgshow.style.display = "block";
//   } else {
//     msgshow.style.display = "none";
//   }
// });
// }
  //msgshow.classList.add('show');
  // setTimeout(() => form.submit(), 2000);


// const a=document.getElementById("showmsg").display;
// console.log(a)

</script>
<style>
/*#showmsg {
  display: none;
}

#showmsg.show {
  display: block;
}*/
</style>

</head>

<?php


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'vendor/phpmailer/phpmailer/src/Exception.php'; 
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php'; 
require 'vendor/phpmailer/phpmailer/src/SMTP.php'; 
 
if ($_SERVER['REQUEST_METHOD']=="POST")  {


$uname=$_POST['uname'];
$mobnum=$_POST['mobilenum'];
$email=$_POST['email'];
$comment=$_POST['comment'];


// Create an instance of PHPMailer class 
$mail = new PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = 1;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(true);                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bhanutej94@gmail.com';                     //SMTP username
    $mail->Password   = 'gktsguttlzrqysaq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email,$uname);
    #'bhanutej94@gmail.com.com', 'BizNis Team');    //Add a recipient
    $mail->addAddress('team@biznis.international','BizNis Team');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Recieved message from $uname";
    $mail->Body    ="
    <div>

    <img src='https://biznis.international/assets/images/bizNis-logo.png' width='250px'>
<h3  style='color:#061840;margin:0px;'>Hello! BizNis Team we got enquiry from</h3> 
<br><br>
<div style='display:flex;'>
<h4 style='color:#061840;margin:0px;'>Name:</h4>
<h4 style='color:#061840;margin:0px;'> $uname</h4>
</div><br>
<div style='display:flex;'>
<h4 style='color:#061840;margin:0px;'>Mobile Number:</h4> 
<h4 style='color:#061840;margin:0px;'> $mobnum</h4>
</div><br>
<div style='display:flex;'>
<h4 style='color:#061840;margin:0px;'>Email Id:</h4>
<h4 style='color:#061840;margin:0px;'> $email</h4>
</div><br>
<div style='display:flex;'>
<h4 style='color:#061840;margin:0px;'>Comments:</h4>
<h4 style='color: #061840;margin:0px;'> $comment<h4>
</div><br><br>  
<h4 style='color:#061840;margin:0px;'>Thanking you</h4>
    </div>  ";

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   echo "<script>
   function onfun(){
   const x=document.getElementById('showmsg')
   x.style.display='block'
   }
   </script>";
   // echo 'Message has been sent';
   // $acmail=true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $acmail=null;
}
// header("Location:contactus.php");

//	"<p style='color:green;''> thankyou for filling your request, our team will contact you soon </p>";)

}
?>

<body>

    <div class="main-sec about-img">
        <header class="header p-rel">
			<div class="sticky-wrapper">
				<div class="sticky-header">
					<div class="header-middle ">
							<div class="header-left">
								<a href="index.html" class="logo">
									<img src="assets/images/bizNis-logo.png" alt="Bizinis Logo">
								</a>
							</div>
							<div class="header-right">
								<button class="mobile-menu-toggler">
									<span class="sr-only">Toggle mobile menu</span>
									<i class="fal fa-bars"></i>
								</button>
								<nav class="main-nav ls-20">
									<ul class="menu sf-arrows">
										<li>
											<a href="index.html">Home</a>
										</li>
										<!-- <li>
								<a href="about-bizinis.html">About bizNis</a>
							</li> -->
										<li>
											<a href="events.html">Events</a>
										</li>
										<li>
											<a href="market-place.html">Market Place</a>
										</li>
										<li>
											<a href="contactus.php" class="active">Contact Us</a>
										</li>
										<a href="https://memberzone.biznis.international/auth/register" class="btn btn-secondary-color ls-0 btn-login">
										<span>Join</span>
									</a>
									<a href="https://memberzone.biznis.international/auth/login?returnUrl=%2F" class="btn btn-secondary-color ls-0 btn-login">
										<span>Login</span>
									</a>
									</ul><!-- End .menu -->
								</nav><!-- End .main-nav -->
							</div>
					</div>
				</div>
			</div>
			<!-- <div class="top-shape">
				<img src="assets/images/Path 5.svg" alt="">
			</div> -->
		</header>
    </div>
    <section class="bread-sec">
		<div class="container-fluid">
			<div class="row">
				<div class="bread-cont1">
					<div class="d-flex justify-content-center align-items-center f-col">
						<div>
							<div class="red-bar2"></div>
							<h2 class="text-center text-blue">Contact Us</h2>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-md-8">
							<p>A secure platform where companies and governments can connect, network and do
								business. Governments will promote tenders inviting companies to apply and quote.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- <div class="container contact-detail-section padding-small">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-sm-8 col-10">
                <h2 class="ls-n-20 text-center section-heading">We are here to help you.</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-sm-8 col-10">
                <div class="icon-box icon-box-simple">
                    <figure>
                        <a class="icon-image"><i class="fal fa-phone"></i></a>
                    </figure>
                    <div class="icon-box-content text-center">
                        <p class="box-info mb-0">Please call on</p>
                        <h4 class="box-title mb-0">(888) 303-6699</h4>
                        <p class="box-desc ls-0 mb-0">to get support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8 col-10">
                <div class="icon-box icon-box-simple">
                    <figure>
                        <a class="icon-image"><i class="fal fa-envelope-open"></i></a>
                    </figure>
                    <div class="icon-box-content text-center">
                        <p class="box-info mb-0">Please email on</p>
                        <h4 class="box-title mb-0">info@caremed.com</h4>
                        <p class="box-desc ls-0 mb-0">to get support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8 col-10">
                <div class="icon-box icon-box-simple">
                    <figure>
                        <a class="icon-image"><i class="fal fa-map-marker-alt"></i></a>
                    </figure>
                    <div class="icon-box-content text-center">
                        <p class="box-info mb-0">Envato Pty Ltd.</p>
                        <h4 class="box-title mb-0">1201 King Street</h4>
                        <p class="box-desc ls-0 mb-0">Melbourne, Australia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container contact-map-section position-relative padding-small">
        <div id="map" style="height: 684px;background-color: #f4f4f4;border-radius: 30px;"></div>
        <div class="card-contact card-rating">
            <p class="card-info ls-0">
                Coming for a visit or a coffee?
            </p>
            <div class="btn-link">
                <a href="#">Get Direction</a><i class="far fa-caret-right"></i>
            </div>
        </div>
    </div> -->

    <div class="container form-section p-rel">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-10 form-card">
                <div class="row d-flex justify-content-center">
                    <div class="d-flex justify-content-center align-items-center f-col third-cont">
                        <div>
                            <div class="red-bar2"></div>
                            <h2 class="text-center text-blue">Drop Us a Message</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-10 offset-1">
                        <form class="book-form-contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="row row-joined">
                                <div class="col-sm-12 col-lg-12 mt-2">
                                    <div class="input-group input-light search">
                                        <div class="form-icon">
                                            <img src="assets/images/User.svg" alt="" width="20px">
                                        </div>
                                        <input type="text" class="form-control" 
                                        placeholder="Your Name *" value="" name="uname">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 mt-2">
                                    <div class="input-group input-light search">
                                        <div class="form-icon">
                                            <img src="assets/images/smartphone.svg" alt="" width="20px">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Mobile Number *" value="" name="mobilenum">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 mt-2">
                                    <div class="input-group input-light search">
                                        <div class="form-icon">
                                            <img src="assets/images/message.svg" alt="" width="20px">
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email *" value=" " name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="input-group input-light search">
                                        <div class="form-icon">
                                            <img src="assets/images/comment.svg" alt="" width="20px">
                                        </div>
                                        <textarea class="form-control text-area" placeholder="Comment" value="" name="comment"></textarea>
                                    </div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-third btn-form d-flex mr-auto ml-auto mb-1" onclick="onfun()" >
                             
                             <!-- <a href="javascript: submit()"> -->
                                <span>
                                 Submit Now</span>
                                                                 <br>
                            </button>
                            <p id="showmsg" style="color:green;display:none">
                          Thankyou for filling your request, our team will contact you soon  </p>
                            

                        </form>
         
                    </div>
                </div>
            </div>
        </div>
        <div class="about-sec1-shape1">
            <img src="assets/images/06.png" alt="">
        </div>
    </div>


    <section class="footer1">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="assets/images/bizNis-logo.png" alt="">
				</div>
				<div class="col-md-6  d-flex justify-content-flex-end align-items-center">
					<div class="social-icons">
						<div>
							<img src="assets/images/Vk.svg" alt="">
						</div>
						<div>
							<img src="assets/images/Pinterest.svg" alt="">
						</div>
						<div>
							<img src="assets/images/Twitter.svg" alt="">
						</div>
						<div>
							<img src="assets/images/Facebook.svg" alt="">
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>Copyright © 2022 bizNis International</p>
				</div>
				<div class="col-md-6 d-flex justify-content-flex-end align-items-center">
					<div class="d-flex gap-4">
						<p><a href="contactus.php">Contact Us</a></p>
						<p>Terms & Conditions</p>
						<p>Privacy Policy</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <button id="scroll-top" title="Back to Top"><i class="fal fa-angle-up"></i></button>



    <div class="mobile-menu-overlay"></div>

    <div class="mobile-menu-container mobile-menu-light">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="fal fa-times"></i></span>

			<nav class="mobile-nav mt-3">
				<ul class="mobile-menu">
					<li>
						<a href="index.html">Home</a>
					</li>
					<!-- <li>
			<a href="about-bizinis.html">About bizNis</a>
		</li> -->
					<li>
						<a href="events.html">Events</a>
					</li>
					<li>
						<a href="market-place.html">Market Place</a>
					</li>
					<li>
						<a href="contactus.php" class="active">Contact Us</a>
					</li>
					<a href="https://memberzone.biznis.international/auth/register" class="btn btn-secondary-color ls-0 btn-login">
										<span>Join</span>
									</a>
									<a href="https://memberzone.biznis.international/auth/login?returnUrl=%2F" class="btn btn-secondary-color ls-0 btn-login">
										<span>Login</span>
									</a>
				</ul>
			</nav>

			<div class="social-icons">
				<div>
					<img src="assets/images/Vk.svg" alt="">
				</div>
				<div>
					<img src="assets/images/Pinterest.svg" alt="">
				</div>
				<div>
					<img src="assets/images/Twitter.svg" alt="">
				</div>
				<div>
					<img src="assets/images/Facebook.svg" alt="">
				</div>

			</div>


		</div>
	</div>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/datepicker.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>

</body>

</html>