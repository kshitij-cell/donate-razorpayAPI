<?php

 $apiKey = "rzp_test_a23LvQnRZFnpdO";

?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="<?php echo $_POST['amount'] * 100;?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Sparks Donations"
    data-description="Every Life Matters"
    data-image="https://img.icons8.com/nolan/96/charity.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#2c22f6"
>
</script>
<input type="hidden" custom="Hidden Element" name="hidden">
<input type="hidden" name="hello">
</form>

<style>
    .razorpay-payment-button{
        display: none;
    }
    body
    {
        background-image:url(brandi-redd-aJTiW00qqtI-unsplash.jpg);
        background-size: cover;
    background-repeat: no-repeat;
    }
</style>

<script>
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    })
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <script src="./test.js"></script>
</body>
</html>