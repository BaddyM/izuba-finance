<?php
$page = 'Contact';

include 'header.php';
include 'config/db.php';
?>

<div class="container-fluid">
    <h5 class="text-center p-3 contact">For any inquiries, Please fill in this form to get in touch with Izuba Support Team.
        We shall get back to you shortly.
    </h5>

    <form action="" method="post" class="container">
        <div class="form-floating mb-2">
            <input type="text" name="names" class="form-control" placeholder="Enter names" required>
            <label for="" class="form-label">Enter Full Names Here <i class="fw-bold text-danger">*</i></label>
        </div><!-- Names -->
        <div class="row contact">
            <div class="col form-floating mb-2">
                <input type="text" name="contact" class="form-control" placeholder="Enter contact" required>
                <label for="" class="form-label">Enter Contact Here <i class="fw-bold text-danger">*</i></label>
            </div><!-- Contact -->
            <div class="col form-floating mb-2">
                <input type="email" name="email" class="form-control" placeholder="Enter email">
                <label for="" class="form-label">Enter Email Here</label>
            </div><!-- Email -->
        </div>
        <div class="col form-floating mb-2">
            <textarea type="text" name="message" class="form-control" placeholder="Enter Message" required></textarea>
            <label for="" class="form-label">Enter Message Here</label>
        </div><!-- Message -->
        <button class="loan-btn" name="send-message" type="submit">SUBMIT</button>
    </form>
</div>

<?php

if(isset($_POST['send-message'])){
    $sql = "INSERT INTO contacts(`names`,`contact`,`email`,`message`,`date`) 
    VALUES('".$_POST['names']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['message']."',NOW());";

    $query = mysqli_query($conn, $sql);

    echo '<script>window.alert("Message Sent Successfully")</script>';
}

include 'footer.php';
?>