<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$from = 'Contact Form'; 
		$to = 'jzweibel@gmail.com'; 
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		// Check if subject has been entered
		if (!$_POST['subject']) {
			$errSubject = 'Please enter the subject';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errSubject && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again!</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="CSS/Jane_style.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel='shortcut icon' href='images/logos/favicon.gif' type='image/x-icon'/ >
  	<link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">
  	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		jQuery(function($) {
		$('.navbar .dropdown').hover(function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

		}, function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

		});

		$('.navbar .dropdown > a').click(function(){
		location.href = this.href;
		});

		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-82821236-1', 'auto');
	  ga('send', 'pageview');
	</script>
  	<title>jane m.z. about</title>
</head>
<body class="font">
<!--NAVIGATION BAR BEGINS-->
	<nav class="navbar navbar-default navbar-fixed-top nav-transparent">
		<div class="container container-width">

		<!--logo for reg screens-->
				<a class="navbar-brand hidden-xs hidden-sm" href="index.html">
					<img class="brand-image nav-logo" src="images/logos/jmz_logo.svg" alt="jane m.z. logo">
				</a> 
		<!--logo for med and small screens-->
				<a class="navbar-brand hidden-md hidden-lg" href="index.html">
					<img id="mobile-logo" class="brand-image" src="images/logos/logo.svg" alt="fingers crossed logo">
				</a> 
	
			<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse nav-font-size">
				<ul class="nav navbar-nav navbar-right nav-vert-center ">
		<!--illustrations links-->
					<li class="dropdown"> 
	            		<a href="illustrations.html" class="dropdown-toggle" data-toggle="dropdown">Illustrations <b class="caret"></b></a>
			            	<ul class="dropdown-menu nav-font-size">
								<li><a href="illustrations.html#interiors_illustrations">interiors</a></li>
								<li><a href="illustrations.html#self_illustrations">self</a></li>
								<li><a href="illustrations.html#fashion_illustrations">fashion</a></li>
								<li><a href="illustrations.html#people_illustrations">people</a></li>
								<li><a href="illustrations.html#animal_illustrations">animals</a></li>
								<li><a href="illustrations.html#thing_illustrations">things</a></li>
							</ul>
					</li>
		<!--accessories links-->
					<li class="dropdown">
		            	<a href="accessories.html" class="dropdown-toggle" data-toggle="dropdown">Accessories <b class="caret"></b></a>
		            	<ul class="dropdown-menu nav-font-size">
							<li><a href="accessories.html#small_accessories">small accessories</a></li>
							<li><a href="accessories.html#bags">bags</a></li>
						</ul>
		<!--garments links-->
					</li><li class="dropdown">
		            	<a href="garments.html#" class="dropdown-toggle" data-toggle="dropdown">Garments <b class="caret"></b></a>
		            	<ul class="dropdown-menu nav-font-size">
							<li><a href="garments.html#outerwear">outerwear</a></li>
							<li><a href="garments.html#dresses">dresses</a></li>
						</ul>
					</li>
		<!--polaroids links-->
					<li class="dropdown">
		            	<a href="polaroids.html" class="dropdown-toggle" data-toggle="dropdown">Polaroids <b class="caret"></b></a>
		            	<ul class="dropdown-menu nav-font-size">
							<li><a href="polaroids.html#Polo_Colorado">Colorado</a></li>
							<li><a href="polaroids.html#Polo_Paris">Paris</a></li>
							<li><a href="polaroids.html#Polo_New_York">New York</a></li>
							<li><a href="polaroids.html#Polo_Washington">Washington DC</a></li>
							<li><a href="polaroids.html#Polo_India">India</a></li>
							<li><a href="polaroids.html#Polo_Philadelphia">Philadelphia</a></li>
						</ul>
					</li>
		<!--other creations links-->
					<!-- <li class="dropdown">
		            	<a href="other_creations.html" class="dropdown-toggle" data-toggle="dropdown">Other creations <b class="caret"></b></a>
		            	<ul class="dropdown-menu nav-font-size">
							<li><a href="other_creations.html#embroidery">embroidery</a></li>
							<li><a href="other_creations.html#jewelry">jewelry</a></li>
						</ul>
					</li> -->
		<!--about/contact link-->			
					<li>
						<a href="about.html">About & Contact</a>
					</li>
		<!--store link-->
					<!-- <li>
						<a href="store.html">Store</a>
					</li> -->
				</ul>
			</div>
	   	</div>
    </nav>
<!--NAVIGATION BAR ENDS-->

<!-- ABOUT ME -->
	<div class="container container-width">
		<div class="row" id="about">
			<div class="col-xs-12 col-sm-6">
				<img class="img-responsive col-center" src="images/jane_about.jpg" alt="Intro image">
			</div>
			<div class="col-xs-12 col-sm-6 col-center">
				<h3 class="align-left"><span class="bold">Hello!</span>
		            <span class="text-muted">I work for <a class="hidden-link" href="http://www.anthropologie.com/anthro/category/new+arrivals/home-new2.jsp?cm_sp=TOPNAV-_-HOME-_-NEW2#/">Anthropologie Home</a>, where I help to make wonderfully charming housewares. Here are a few facts about me:</span>
		        </h3>
				<ul class="grey-text" type="circle">
					<li>I'm from Colorado, but I've lived in Paris, New York, and Philadelphia.</li>
					<li>I have a dog named <a class="hidden-link" href="images/Frances.jpg">Frances</a>, and I think she's the cutest!</li>
					<li>I love peanut butter cups, and red jolly ranchers.</li>
					<li>I hate velvet; it's just too dry.</li>
					<li>I love spreadsheets, and genuinely enjoy playing minesweeper.</li>
					<li>I coded this website and made everything on it myself.</li>
				</ul>
			</div>
		
		<hr class="line-break">
	
<!-- CONTACT FORM BELOW-->
		<div class="row form-outline col-md-8 col-md-offset-2">
			<h4 class="align-left grey-text col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2"><img class="contact-img" src="images/logos/contact.jpg">Contact me!</h4>

			<form class="form-horisontal" role="form" method="post" action="about.php">

				<div class="form-group col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
					<label for="name" class="control-label">Name</label>
					<div class="">
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
						<?php echo "<p class='text-danger'>$errName</p>";?>
					</div>
				</div>

				<div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4">
					<label for="email" class="control-label">Email</label>
					<div class="">
						<input type="email" class="form-control" id="email" name="email" placeholder="example@something.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
						<?php echo "<p class='text-danger'>$errEmail</p>";?>
					</div>
				</div>

				<div class="form-group col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<label for="subject" class="control-label">Subject</label>
					<div class="">
						<input type="subject" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars($_POST['subject']); ?>">
						<?php echo "<p class='text-danger'>$errSubject</p>";?>
					</div>
				</div>

				<div class="form-group col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<label for="message" class="control-label">Message</label>
					<div class="">
						<textarea class="form-control" rows="6" id="message" name="message" placeholder="Dearest Jane..."><?php echo htmlspecialchars($_POST['message']);?></textarea>
						<?php echo "<p class='text-danger'>$errMessage</p>";?>
					</div>
				</div>

				<div class="form-group col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<div">
						<input id="submit" name="submit" type="submit" value="Send!" class="btn btn-primary send-btn submit">
					</div>
				</div>

				<div class="form-group col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<div>
						<?php echo $result; ?>
					</div>	
				</div>
			</form>
			<script>$('#contactForm').submit(function () {
			 sendContactForm();
			 return false;
			});</script>
		</div>
	</div>
</div>
	<footer class="footer navbar-default navbar-fixed-bottom nav-transparent">
		<div class="container">
			<div class="row footer-center">
				<a href="#" class="text-muted text-center navbar-text">all content, coding, & creation by Jane Zweibel</a>
			</div>
		</div>
	</footer>
	</body>
</html>