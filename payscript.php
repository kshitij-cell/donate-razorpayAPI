<?php

 $apiKey = "rzp_test_A8KwUpyJ0Hp2jK";

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
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
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
<?php
     $to = 'ratan206thk@gmail.com';
     $subject = 'My subject';
     $mailbody='hello';
     $header = 'From: onlinebazzar07@gmail.com' . "\r\n" .
     'Reply-To: onlinebazzar07@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
     mail($to,$subject,$mailbody,$header);
?>