<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link rel="stylesheet" href="../../text/Css/admin.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css"
      integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div>
<?php
include '../../text/Php/accessUser.php';
?>
<h1><code>Welcome to Admin mode!</code></h1>

<div class="fourPad">
    <div class="btnContainer"><button class="square" onClick="window.location.assign('addItem.php')">Add an Item</button></div>
    <div class="btnContainer"><button class="triangle" onClick="window.location.assign('updateItem.php')">Update Stocks</button></div>
    <div class="btnContainer"><button class="circle" onClick="window.location.assign('purchase_history.php')">Purchase History</button></div>
    <div class="btnContainer"><button class="cross" onClick="window.location.assign('deleteItem.php')">Delete an Item</button></div>
</div>
  
<?PHP echo "<div class='msg'>".$_SESSION['msg']."</div>";?>
<a href="../settings.php" class="back"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</div>

</body>
</html>