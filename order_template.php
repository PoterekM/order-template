<?php
    $recipient = "Jesse";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "1493 SW 2nd Ave, Portland, OR 97201";
    $downtown_order = "20 lbs dark roast, 15 lbs light roast.";
    $northwest_order = "50 lbs dark roast.";
    $south_order = "40 lbs light roast.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Coffee Order</title>
    <link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>


<body>
    <p>Hi <?php echo $recipient; ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
      <p class="order"><?php echo $downtown_order; ?></p>
      <p class="address"><?php echo $downtown_address; ?></p>
      <p class="order"><?php echo $northwest_order; ?></p>
      <p class="address"><?php echo $northwest_address; ?></p>
      <p class="order"><?php echo $south_order; ?></p>
      <p class="address"><?php echo $south_address; ?></p>
    <p>Thanks,</p>
    <p>Diane</p>
</body>
