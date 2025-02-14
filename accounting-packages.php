<!DOCTYPE html>
<?php
include "inculude/header.php";
?>

<div class="page-title">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-title-heading">
<h1 class="h1-title">Accounting Packages</h1>
</div>
<ul class="breadcrumbs">
<li><a href="index.php" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<li><a href="#" title="">Other Services<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<li><a href="accounting-packages.php" title="">Accounting Packages</a></li>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>

<section class="flat-row flat-owl-stage">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="container">
        <div class="grid">
            <div class="card">
                <h2 class="card_title">Basic</h2>
                <p class="pricing">2,999<span class="small">Rs./Month</span></p>
                <hr>
                <ul class="features">
                    <li>Bookkeeping</li>
                    <li>GST Return</li>
                    <li>CTDS Return</li>
                    <li>Consultation (Free)</li>
                    <li>Visit (1 day/ Month)</li>
                </ul>
                <p>**GST is applicable**</p>
                <a href="index.php" class="cta_btn">Get Now</a>
            </div>
            <div class="card">
                <h2 class="card_title">Premium</h2>
                <p class="pricing">7,999<span class="small">Rs./Month</span></p>
                <hr>
                <ul class="features">
                    <li>Bookkeeping</li>
                    <li>GST Return (Chargeable)</li>
                    <li>CTDS Return (Chargeable)</li>
                    <li>Consultation (Free)</li>
                    <li>Visit (2 day/ Month)</li>
                </ul>
                <p>**GST is applicable**</p>
                <a href="index.php" class="cta_btn">Get Now</a>
            </div>
            <div class="card">
                <h2 class="card_title">Full Time</h2>
                <p class="pricing">13,999<span class="small">Rs./Month</span></p>
                <hr>
                <ul class="features">
                    <li>Bookkeeping</li>
                    <li>GST Return (Chargeable)</li>
                    <li>CTDS Return (Chargeable)</li>
                    <li>Consultation (Free)</li>
                    <li>Visit (1 day/ Week)</li>
                </ul>
                <p>**GST is applicable**</p>
                 <a href="accounting-packages.php" class="cta_btn">Buy Now</a>
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

<!-- Mirrored from www.rpassociates.com/accounting-packages.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2025 12:35:07 GMT -->
</html>