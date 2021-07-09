<?php
include  'check.php';
// echo $_POST['hello'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    #thanks{
        height:100vh;
    }
    #thanks {
  background-image: url(courtney-hedger-t48eHCSCnds-unsplash.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
}

#thanks::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: -1;
}
</style>
<body>
   <section id="thanks">

   </section>
</body>
</html>