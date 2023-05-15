<?php 
$page = 'Home';
include 'header.php'; 
?>
<div class="top-img">

</div>

<div class="container-fluid bg-light">
    <div class="row p-4 justify-content-between">
        <div data-aos="zoom-in" class="card shadow-lg col-md-4 mb-4 border-0">
            <div class="card-header bg-body">
                <h5 class="fw-bold text-center">Mision</h5>
            </div>
            <div class="card-body">
                <p>Our Mission is to...</p>
            </div>
        </div><!-- Mission -->

        <div data-aos="flip-down" class="card shadow-lg col-md-4 mb-4 border-0">
            <div class="card-header bg-body">
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
            <button class="btn btn-white" type="button" onclick="plus()"><i class="fa fa-plus-circle fs-3 pointer"></i></button>
            </div>
            <div class="mx-5 my-2">
                <label for=""><b>Principal:</b> </label>
                <label for="" id="loan-calc">100000</label> <br>
                <label for=""><b>Payment After 1 month :</b> </label>
                <label for="" id="payment">118000</label>
            </div>
            <div>
                <button class="btn btn-white" type="button" onclick="minus()"><i class="fa fa-minus-circle fs-3 pointer"></i></button>
            </div>
        </div>
    </form><!-- Loan Calcualator -->

    <script>
        let count = 100000;

        function plus(){
            let pay = parseFloat(count * 0.18);
            count += 5000;
            document.getElementById("loan-calc").innerHTML = count;
            document.getElementById("payment").innerHTML = (pay + count);
        }
        
        function minus(){
            let pay = parseFloat(count * 0.18);
            count -=5000;
            document.getElementById("loan-calc").innerHTML = count;
            document.getElementById("payment").innerHTML = (pay + count);
        }
    </script>

    <h5 class="text-uppercase fw-bold text-center">What We Offer at Izuba Financial Services</h5>

    <div class="row justify-content-around p-4">
        <div data-aos="flip-left" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-clock-four fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Short Process</h5>
            <p>We Offer quick time loans in the shortest time period</p>
        </div>
        <div data-aos="zoom-in" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-money-bill-trend-up fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Investment</h5>
            <p>We also have a package for the investors...</p>
        </div>
        <div data-aos="flip-right" data-aos-duration="2000" class="col-md-3 text-center mb-4 shadow-sm">
            <i class="fa fa-people-group fs-1 text-warning"></i>
            <h5 class="fw-bold p-2">Customer Care</h5>
            <p>Our Customer care at Izuba Finance is a great deal</p>
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

<?php include 'footer.php'; ?>