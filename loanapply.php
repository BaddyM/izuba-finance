<?php
$page = 'Apply';

include 'header.php';
include 'config/db.php';
?>
<div class="container p-lg-3">
    <h5 class="text-center fw-bold text-decoration-underline">Fill in this form with your details to apply for a loan</h5>
    <form action="" method="post" class="bg-light p-4">
        <h6 class="text-danger fst-italic">Note:Please type in <code class="text-decoration-underline">CAPITAL LETTERS</code></h6>
        <div class="d-flex flex-wrap">
            <div>
                <label for="" class="form-label fw-bold m-2">Loan Type: <i class="text-danger fw-bold">*</i></label>
                <input type="text" name="loan-type" value="<?php echo $_POST['loanid']?>">
            </div><!-- Loan type -->
            <div>
                <label for="" class="form-label fw-bold m-2">Applicant's First Name: <i class="text-danger fw-bold">*</i></label>
                <input type="text" name="app-fname" placeholder="Enter First Name">
            </div><!-- Applicant First Name -->
            <div>
                <label for="" class="form-label fw-bold m-2">Applicant's Last Name: <i class="text-danger fw-bold">*</i></label>
                <input type="text" name="app-lname" placeholder="Enter Last Name">
            </div><!-- Applicant Last Name -->
            <div>
                <label for="" class="form-label fw-bold m-2">Applicant's Occupation: <i class="text-danger fw-bold">*</i></label>
                <input type="text" name="occupation" placeholder="Enter Occupation">
            </div><!-- Applicant's Occupation -->
            <div>
                <label for="" class="form-label fw-bold m-2">Applicant's NIN Number: <i class="text-danger fw-bold">*</i></label>
                <input type="text" name="app-nin" placeholder="Enter NIN">
            </div><!-- Applicant's NIN Number -->
            <div>
                <label for="" class="form-label fw-bold m-2 ">Loan Amount: <i class="text-danger fw-bold">*</i></label>
                <input type="number" min=0 step="500" name="app-amount" value="0" class="text-center">
            </div><!--Applicant Amount -->
            <div>
                <label for="" class="form-label fw-bold m-2">Applicant's Contact: <i class="text-danger fw-bold">*</i></label>
                <input type="number" name="app-contact" placeholder="XXXX-XXX-XXX">
            </div><!-- Applicant's Contact -->
            <div>
                <label for="" class="form-label fw-bold m-2">Applicant's Email: <code><i>(optional)</i></code></label>
                <input type="text" name="app-email" placeholder="Enter Email">
            </div><!-- Applicant's Email -->
        </div>
        <button class="loan-btn m-2" name="apply" type="submit">SUBMIT</button>
    </form>
</div>

<?php

//When the button is pressed to apply for loan
if (isset($_POST['apply'])) {
    $sql = "INSERT INTO applications(`loan`,`appfname`,`applname`,`appnin`,`occupation`,`amount`,`contact`,`email`,`date`) VALUES
    ('" . $_POST['loan-type'] . "','" . $_POST['app-fname'] . "','" . $_POST['app-lname'] . "','" . $_POST['app-nin'] . "','" . $_POST['occupation'] . "',
    '" . $_POST['app-amount'] . "','" . $_POST['app-contact'] . "','" . $_POST['app-email'] . "',NOW());";

    $query = mysqli_query($conn, $sql);

    echo '<script>window.alert("Applied Successfully")</script>';
}

include 'footer.php';
?>