
<!DOCTYPE html>
<?php
include "inculude/header.php";
?>

<div class="page-title">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-title-heading">
<h1 class="h1-title">Contact Us</h1>
</div>
<ul class="breadcrumbs">
<li><a href="index-2.html" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<li><a href="#" title="">Company<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<li><a href="contact-3.html" title="">Contact</a></li>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<section class="flat-row pd-contact-v1">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="contact-info">
<div class="info info-address">
<div class="title">Address</div>
<p>4 Fairlie Place, 5th Floor, Kolkata 700 001<br>West Bengal, India</p>
</div>
<div class="info info-address">
<div class="title">Phone number</div>
<p>Call us: 903 800 1356</p>
</div>
<div class="info info-address">
<div class="title">E-mail address</div>
<p>rahul.bhakat@rpassociates.com</p>
</div>
</div>
</div>
<div class="col-md-8">
<div class="flat-form-info">
    <form method="post" action="https://www.rpassociates.com/php/from-action.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>
        
        <label for="message">Message:</label><br>
        <textarea name="message" rows="4" required></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</div>
</div> 
</div>
</div>
</section>

<section class="flat-row flat-progress-accordion bg-theme">
	<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-section center">
	<i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
<h2>Our Other Ofiice Locations</h2>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="progres">
<div class="progress-title">
<h2>Delhi Office</h2>
</div>
<i class="fa fa-3x fa-map-marker" aria-hidden="true"></i><br>
<div class="progress-content">
<p>H -No 29A, Veer Savarkar Block, Shakarpur, Delhi, 110092.
</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="progres">
<div class="progress-title">
<h2>Bangalore</h2>
</div>
<i class="fa fa-3x fa-map-marker" aria-hidden="true"></i><br>
<div class="progress-content">
<p>THIMMAIAH Chamber, D Mart, Gandhi Nagar, Bangalore - 560 009.
</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="progres">
<div class="progress-title">
<h2>Durganagar</h2>
</div>
<i class="fa fa-3x fa-map-marker" aria-hidden="true"></i><br>
<div class="progress-content">
<p>77/2 Kabi Mukunda Das Rd, Block - A, GR Floor, Kolkata 700065, W.B.
</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="progres">
<div class="progress-title">
<h2>Saltlake</h2>
</div>
<i class="fa fa-3x fa-map-marker" aria-hidden="true"></i><br>
<div class="progress-content">
<p>Room No- 805, GN 34/1, GN Block, Sector V, 8th FL, Kolkata, W.B. 700091
</p>
</div>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>
</section>

<section class="flat-row pdmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.101226406446!2d88.34561911540146!3d22.575317038559163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277d96721b9ed%3A0x4af1b992d24e60dd!2sRP%20Associates!5e0!3m2!1sen!2sin!4v1666253275195!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<footer id="footer">
<div class="footer-widgets">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="widget-infomation">
<ul class="infomation-footer">
<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#" title=""><span class="__cf_email__" data-cfemail="7c0f090c0c130e083c08141911190f1a101d08521f1311">rahul.bhakat@rpassociates.com</span></a></li>
<li><i class="fa fa-phone" aria-hidden="true"></i><a href="#" title="">9038001356</a></li>
<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#" title="">4 Fairlie Place, 5th Floor, Kolkata 700 001, W.B. IN</a></li>
</ul>
</div>
</div>
</div>
<div class="row widget-box">
<div class="col-md-4">
<img src="images/Logo-new-final.png" alt="logo My Business">
<div class="widget widget-text">
<p>RP Associates Consultancy Pvt Ltd stands as a prominent online service provider facilitating company registration in India. Our expertise lies in delivering extensive consultancy services to companies, both within the country and overseas. By harnessing the power of technology, we have devised a seamless approach that simplifies the completion of governmental and legal formalities. These processes are consolidated within a user-friendly platform, offering utmost convenience to our clients.</p>
</div>
</div>
<div class="col-md-4">
<div class="widget widget-services">
<ul class="one-half first">
<li><a href="#" title="">About Us</a></li>
<li><a href="#" title="">Contact Us</a></li>
<li><a href="#" title="">Careers</a></li>
<li><a href="#" title="">Terms & Conditions</a></li>
<li><a href="#" title="">Privacy Policy</a></li>
<li><a href="#" title="">Refund Policy</a></li>
</ul>
<ul class="one-half">
<li><a href="#" title="">Company Registration in Kolkata</a></li>
<li><a href="#" title="">Company Registration in Delhi</a></li>
<li><a href="#" title="">Company Registration in Mumbai</a></li>
<li><a href="#" title="">Company Registration in Assam</a></li>
<li><a href="#" title="">Company Registration in Bihar</a></li>
<li><a href="#" title="">Company Registration in UP</a></li>
</ul>
</div>
</div>
<div class="col-md-4">
<div class="widget widget-subscribe">
<form id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
<div id="subscribe-content">
<label for="form-email-footer">Email address:</label>
<div class="input-email">
<input type="email" name="email-form" id="subscribe-email" placeholder="Your email address" />
</div>
<button type="button" id="subscribe-button" class="button-subscribe">SUBMIT</button>
</div>
<div id="subscribe-msg"></div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copyright">
<p>Copyright 2024 <a href="#" title=""> RP Associates </a>| All Rights Reserved.</a></p>
</div>
<ul class="menu-footer">
<li><a href="#" title="">Terms & Conditions</a></li>
<li><a href="#" title="">|</a></li>
<li><a href="#" title="">Privacy Policy</a></li>
<li><a href="#" title="">|</a></li>
<li><a href="#" title="">Refund Policy</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<div class="button-go-top">
<a href="#" title="" class="go-top">
<i class="fa fa-chevron-up"></i>
</a>
</div>
</div> 

<a href="https://api.whatsapp.com/send?phone=919038001356" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript" src="javascript/jquery.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/owl.carousel.js"></script>
<script type="text/javascript" src="javascript/jquery.easing.html"></script>
<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="javascript/waypoints.min.js"></script>
<script type="text/javascript" src="javascript/jquery.cookie.js"></script>
<script type="text/javascript" src="javascript/jquery-validate.js"></script>
<script type="text/javascript" src="javascript/main.js"></script>

<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.html"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.html"></script>
<script type="text/javascript" src="revolution/js/slider_v1.html"></script>

<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.html"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.html"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a7b8b8ed7591465c70778af/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>


<!-- Mirrored from www.rpassociates.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2025 12:35:29 GMT -->
</html>