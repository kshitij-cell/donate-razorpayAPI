<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>details</title>
</head>

<body>
    <section id="checkout">
        <div class="row" style="padding:100px 300px;">
            <div class="col-50">
                <div class="container-form">
                    <form action="payscript.php" method="post" style="padding: 25px;">

                        <div class="row">
                            <div class="col-25">
                                <h1
                                    style="text-align: center;margin:20px 10px;font-family: lato; text-transform: uppercase;">
                                    <span>d</span>onor
                                    <span>d</span>etails
                                </h1>


                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="name" placeholder="John M. Doe">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="john@example.com">
                                <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
                                <input type="text" id="city" name="mobile" placeholder="Mobile Number">
                                <label for="amt"><i class="fa fa-amount"></i> Amount</label>
                                <input type="text" id="amt" name="amount" placeholder="123">



                            </div>

                            <input type="submit" value="Pay Now" class="btn">
                    </form>
                </div>
            </div>

        </div>
    </section>

</body>

</html>