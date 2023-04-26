<?php
$page = 'Loans';
include 'includes/header.php';
include 'config/db.php';
?>

<div class="container-fluid">
    <h5 class="fw-bold text-center text-uppercase p-3 animate__animated animate__flip">Loans Services We offer</h5>

    <div class="row text-center container-fluid">
        <?php
            $sql = "SELECT * FROM loans";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($query)){
        ?>
        <div data-aos="flip-right" data-aos-duration="2000" class="card col-sm-3 m-3 border-0 shadow-sm">
            <div class="card-header bg-body">
                <h5 class="text-center fw-bold"><?php echo $row['loanheader']?></h5>
            </div>
            <div class="card-body">
                <p>
                <?php echo $row['loantext']?>
                </p>
                <form action="loanapply.php" method="post">
                    <input type="hidden" name="loanid" value="<?php echo $row['loanheader']; ?>">
                    <button class="loan-btn" name="loan-apply" type="submit">apply</button>
                </form>
            </div>
        </div><!-- Loans -->
        <?php
        }
        ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>