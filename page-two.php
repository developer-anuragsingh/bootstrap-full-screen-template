<?php
include('./header.php');   // load header
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-4">
                <h1 class="display-4 pb-5">Credit Card (CC)</h1>
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
                    <label for="full_name">Full Name</label>
                </div>

                <div class="form-label-group">
                    <input type="number" id="amount" name="amount" class="form-control" placeholder="1" value="0.01" required>
                    <label for="amount">Amount</label>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Payment Method</label><br />

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="alipay" name="payment_method" class="custom-control-input" value="alipay" checked>
                        <label class="custom-control-label" for="alipay">Alipay</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="wechatpay" name="payment_method" class="custom-control-input" value="wechatpay">
                        <label class="custom-control-label" for="wechatpay">Wechat Pay</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cc" name="payment_method" class="custom-control-input" value="cc">
                        <label class="custom-control-label" for="cc">Credit Card</label>
                    </div>
                </div>

                <div class="form-group">
                    <input type="hidden" name="reference" id="reference" value="<?php echo rand('1111', '99999'); ?>">
                    <input type="hidden" name="currency" id="currency" value="USD">
                    <input type="hidden" name="payment_process" id="payment_process" value="direct_cc">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Payment</button>
            </form>
        </div>
    </div>
</main>
<?php
include('./footer.php');     // load header 
?>