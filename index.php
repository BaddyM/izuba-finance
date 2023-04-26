<?php 
$page = 'Home';
include 'includes/header.php'; 
?>
<div class="top-img">

</div>

<div class="container-fluid bg-light">
    <div class="row p-4 justify-content-between">
        <div data-aos="zoom-in" class="card shadow-lg col-md-4 mb-4 border-0">
            <div class="card-header">
                <h5 class="fw-bold text-center">Mision</h5>
            </div>
            <div class="card-body">
                <p>Our Mission is to...</p>
            </div>
        </div><!-- Mission -->

        <div data-aos="flip-down" class="card shadow-lg col-md-4 mb-4 border-0">
            <div class="card-header">
                <h5 class="fw-bold text-center">Vision</h5>
            </div>
            <div class="card-body">
                <p>As Izuba finance, Our vision..</p>
            </div>
        </div><!-- Vision -->
    </div><!--- Vision and Mision statements here -->

    <form class="text-center calculator">
        <h5 class="fw-bold text-decoration-underline">OUR LOAN CALCULATOR</h5>
        <div class="card border-0 shadow-sm p-2">
            <div>
                <i class="fa fa-plus-circle fs-3"></i>
            </div>
            <div class="mx-5 my-2">
                <input id="loan-calc" type="text" class="form-control fs-5 text-center" value="50000">
            </div>
            <div>
                <i onclick="minus()" class="fa fa-minus-circle fs-3 pointer"></i>
            </div>
        </div>
    </form><!-- Loan Calcualator -->

    <h5 class="text-uppercase fw-bold text-center">What We Offer at Izuba Financial Services</h5>

    <div class="row p-4">
        <div data-aos="flip-left" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-clock-four fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Short Process</h5>
            <p>We Offer quick time loans in the shortest time persiod</p>
        </div>
        <div data-aos="flip-down" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-mobile-android fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Mobile Money & Agency Service</h5>
            <p>We Also work alongside...</p>
        </div>
        <div data-aos="zoom-in" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-business-time fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Business Consultancy</h5>
            <p>As Izuba Financial Services,...</p>
        </div>
        <div data-aos="fade-in" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-money-bill-trend-up fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Investment</h5>
            <p>We also have a package for the investors...</p>
        </div>
    </div><!--- Financial Services here --->

    <h5 class="text-center fw-bold text-uppercase"> Our Proud Partners</h5>
    <div class="d-flex p-3  justify-content-around">
        <img class="logo2" src="vendor/images/New-mtn-logo.jpg" alt="">
        <img class="logo2" src="vendor/images/Centenary-Bank-logo.jpg" alt="">
        <img class="logo2" src="vendor/images/Airtel logo.png" alt="">
        <img class="logo2" src="vendor/images/equity bank.png" alt="">
    </div><!--- Partners here -->
</div>

<?php include 'includes/footer.php'; ?>