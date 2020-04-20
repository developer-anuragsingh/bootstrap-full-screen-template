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

                <!-- <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div> -->

                <div class="form-label-group">
                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name" required autofocus>
                    <label for="full_name">User Name</label>
                </div>

                <div class="form-label-group">
                    <input type="text" id="password" name="password" class="form-control" placeholder="Password" required autofocus>
                    <label for="password">Password</label>
                </div>

                <div class="form-group">
                    <input type="hidden" name="security" id="security" value="security">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>
</main>
<?php
include('./footer.php');     // load header 
?>