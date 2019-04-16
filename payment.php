<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/alamin.css">
    <title>EmptySession</title>
</head>
<body>
<?php
if(isset($_SESSION['valid'])) {
    echo "<h1>Wellcome ".$_SESSION['NAME']."</h1>";
    echo "<a href='logout.php'>Logout</a>";
    ?>
    //HTML START

//Payment start
    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

    //Payment closed



    <?php
}else{
    header("Location: Login.php");
}

?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
