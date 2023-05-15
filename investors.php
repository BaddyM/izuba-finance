<?php
$page = 'Investors';
include 'header.php';
include 'config/db.php';
?>

<div class="container-fluid">
    <div class="p-3">
        <img data-aos="flip-right" data-aos-duration="1500" class="img-fluid w-100" src="vendor/images/investors.png" alt="">
    </div><!-- Header -->

    <div class="row invest">
        <div class="col text-center" data-aos="zoom-out" data-aos-duration="1500">
            <h6 class="fw-bold text-uppercase text-decoration-underline">for the Investors</h6>
            <p>
                Every Business has an investment behind it, So at Izuba, We offer those opportunities for those that would
                wish to invest in the company to grow and as it grows, Each and everyone gets to benefit from the investment made.
                For those that wish to invest in the company, Please fill in the form below and we shall shortly get back to you.
            </p>
        </div><!--- Text here -->
        <div class="col bg-light p-2" data-aos="zoom-in" data-aos-duration="1500">
            <h5 class="text-center fw-bold p-2">Please Fill in the Form below</h5>
            <p class="text-danger fst-italic">Note: (*) -> Required</p>
            <form action="" method="post">
                <div class="form-floating mb-2">
                    <input type="text" name="names" class="form-control" placeholder="Enter name" required>
                    <label for="" class="form-label">Enter Names Here <i class="fw-bold text-danger">*</i></label>
                </div><!-- Names -->
                <div class="form-floating mb-2">
                    <input type="number" name="contact" class="form-control" placeholder="Enter contact" required>
                    <label for="" class="form-label">Enter Phone Number Here <i class="fw-bold text-danger">*</i></label>
                </div><!-- Contact -->
                <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                    <label for="" class="form-label">Enter Email Here <i class="fw-bold text-danger">*</i></label>
                </div><!-- Email -->
                <button class="loan-btn" name="invest" type="submit">SUBMIT</button>
            </form>
        </div><!-- Investor details here -->
    </div>
</div>

<?php

if (isset($_POST['invest'])) {
    $sql = "INSERT INTO investor(`names`,`contact`,`email`,`date`) VALUES('" . $_POST['names'] . "','" . $_POST['contact'] . "','" . $_POST['email'] . "',NOW());";

    $query = mysqli_query($conn, $sql);

    echo '<script>window.alert("Sent Successfully")</script>';
}

include 'footer.php';
?>