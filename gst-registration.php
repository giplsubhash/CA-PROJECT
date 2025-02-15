<?php
include "inculude/header.php";
?>

<body>


	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-heading">
						<h1 class="h1-title">GST Registration</h1>
					</div>
					<ul class="breadcrumbs">
						<li><a href="index.php" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li><a href="#" title="">CA Services<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						<li><a href="#" title="">GST Registration</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

	<section class="flat-row flat-owl-stage">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="title-section left">
						<p align="justify"> According to the GST Law, businesses must undergo GST registration as regular taxable entities if their annual revenue exceeds Rs. 40 lakhs* (Rs. 10 lakhs for NE and hill states). This registration process is essential and failing to do so would be considered a violation, subject to severe penalties.</p><br>
						<p align="justify">GST registration is compulsory for specific companies, and conducting business without obtaining GST registration is against the law and can lead to penalties for non-compliance with GST regulations.</p><br>
						<p align="justify">*The Central Board of Indirect Taxes and Customs (CBIC) has issued a notification increasing the threshold turnover from Rs. 20 lakhs to Rs. 40 lakhs, effective from 1st April 2019.</p><br>
						<p align="justify">*CBIC has notified an increase in the threshold turnover from Rs. 20 lakhs to Rs. 40 lakhs, with the notification coming into effect on 1st April 2019.</p><br>
						<p align="justify">GST Registration Kolkata, GST Services Kolkata. Get quick and hassle-free GST registration services in Kolkata. Expert consultants help with online registration, filing, and compliance.</p>
						<br>
					</div>
				</div>
				<div class="col-md-4">
					<div class="title-section left">
						<img src="images/services/gst-registration.jpg" alt="img-2">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="flat-row flat-iconbox bg-theme">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-section left">
						<h2>Why choose us</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="iconbox-item">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="icon-rounded ion-clipboard">
								</div>
								<div class="box-title">
									<a href="#" title="">Budget-Friendly Services</a>
								</div>
							</div>
							<div class="box-content" align="justify">
								RP Associates is a flexible and experienced business consulting firm. We take pride to provide the best possible services in India with a cost-effectiveness that other companies can't match.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="iconbox-item">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="icon-rounded line-chart">
								</div>
								<div class="box-title">
									<a href="#" title="">Reputation and Trust</a>
								</div>
							</div>
							<div class="box-content" align="justify">
								We are providing legal business solutions for more than 25 years now. We have gradually built our reputation and now RP Associates is one of the leading business registration firms in India.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="iconbox-item">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="icon-rounded clock">
								</div>
								<div class="box-title">
									<a href="#" title="">Information Security</a>
								</div>
							</div>
							<div class="box-content" align="justify">
								We take our client's security as our top-most priority. Our privacy policy and payment gateways are secure and 100% trustworthy. That's why most of our work is repeat business. We guarantee you will come back!
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="height80"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="iconbox-item">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="icon-rounded magic">
								</div>
								<div class="box-title">
									<a href="#" title="">Your One-Stop Solution</a>
								</div>
							</div>
							<div class="box-content" align="justify">
								We have an entire team of highly skilled Accountants, CAs, Lawyers, Cost Accountants, Ex-Bankers, and Financial Experts. So, we have the exact service you are looking for in your business and RP Associates is your one-stop solution for all sorts of your business legalities.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="iconbox-item">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="icon-rounded artboard">
								</div>
								<div class="box-title">
									<a href="#" title="">Satisfying Client Experience</a>
								</div>
							</div>
							<div class="box-content" align="justify">
								We have more than 1000+ satisfied clients all over India. We value our customers and we tried our best to deliver with integrity and efficiency. We ensure brands and names are seen and heard by the targeted customers. This turns our one-time clients into repeated ones. So, Check the testimonials!
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="iconbox-item">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="icon-rounded global">
								</div>
								<div class="box-title">
									<a href="#" title="">Your Legal Advisor</a>
								</div>
							</div>
							<div class="box-content" align="justify">
								RP Associates is more than business consulting firm. We aim to work side-by-side with our clients while providing all the necessary solutions for the business and its legalities. We are more like your legal partner you would love to have. RP Associates never hesitates to go the extra mile or few for their clients.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		// Function to load the header HTML using AJAX
		function loadHeader() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("header-container").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET.html", "header-inc.html", true);
			xhttp.send();
		}

		// Function to load the footer HTML using AJAX
		function loadFooter() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("footer-container").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET.html", "footer-inc.html", true);
			xhttp.send();
		}

		// Call the loadHeader and loadFooter functions to load the header and footer on page load
		window.onload = function() {
			loadHeader();
			loadFooter();
		};
	</script>

<?php
include "inculude/footer.php";
?>
	<div class="button-go-top">
		<a href="#" title="" class="go-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>
	</div>

	<a href="https://api.whatsapp.com/send?phone=919038001356" class="float" target="_blank">
		<i class="fa fa-whatsapp my-float"></i>
	</a>

	<!--Start of JavaScript-->

	<script type="text/javascript" src="javascript/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascript/owl.carousel.js"></script>
	<script type="text/javascript" src="javascript/waypoints.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.cookie.js"></script>
	<script type="text/javascript" src="javascript/jquery-validate.js"></script>
	<script type="text/javascript" src="javascript/main.js"></script>
	<script type="text/javascript" src="javascript/slidermain.js"></script>

	<!--End of JavaScript-->

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function() {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5a7b8b8ed7591465c70778af/default';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

</body>


<!-- Mirrored from www.rpassociates.com/gst-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2025 12:35:04 GMT -->

</html>