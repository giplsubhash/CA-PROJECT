
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
<li><a href="index.php" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<li><a href="#" title="">Company<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<li><a href="contact-3.php" title="">Contact</a></li>
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
<div class="title"> Office Address</div>
<p>
Rakesh Pandey
Govind Bhawan
1st  Floor, Room no.<br>  1F
2, Brabourne Road,
Kolkata-700001</p>
</div>
<div class="info info-address">
<div class="title">Phone number</div>
<p>Call us: 9073639892 &nbsp 03345011633</p>
</div>
<div class="info info-address">
<div class="title">E-mail address</div>
<p>rpassociatestaxcon@gmail.com</p>
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

<!-- <section class="flat-row flat-progress-accordion bg-theme">
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
</section> -->

<!-- <section class="flat-row pdmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.101226406446!2d88.34561911540146!3d22.575317038559163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277d96721b9ed%3A0x4af1b992d24e60dd!2sRP%20Associates!5e0!3m2!1sen!2sin!4v1666253275195!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section> -->

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

<!-- Mirrored from www.rpassociates.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2025 12:35:20 GMT -->
</html>