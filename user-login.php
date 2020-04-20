<?php
include('./header.php');   // load header
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-4">
                <h1 class="display-4 pb-5">Login</h1>
            </div>
        </div>
        <div class="col-6 offset-3">

            <form class="form-chop" method="POST" action="payment-processing.php">

                <div class="form-label-group">
                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name" required autofocus>
                    <label for="full_name">User Name</label>
                </div>

                <div class="form-label-group">
                    <input type="text" id="password" name="password" class="form-control" placeholder="Password" required autofocus>
                    <label for="password">Password</label>
                </div>



                <div class="row">
                    <div class="col">
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <div class="col text-right"><a href="#">Forget password?</a></div>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

                <div class="row pt-5">
                    <div class="col"><a href="./user-register.php">Create account</a></div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include('./footer.php');     // load header 
?>