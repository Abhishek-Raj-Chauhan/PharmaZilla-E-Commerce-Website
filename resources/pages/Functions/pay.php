<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link rel="stylesheet" href="../../text/Css/pay.css">
    <link rel='stylesheet' href='../text/Css/HomeStyle.css'>
    <link rel='stylesheet' href='../text/Css/universal.css'>
    <link rel='stylesheet' href='../text/Css/shop.css'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css"
      integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
    
    hr{  
      border: 0; 
      height: 1px; 
      background-image: -webkit-linear-gradient(left, #464748, #8c8b8b, #464748);
      background-image: -moz-linear-gradient(left, #464748, #8c8b8b, #464748);
      background-image: -ms-linear-gradient(left, #464748, #8c8b8b, #464748);
      background-image: -o-linear-gradient(left, #464748, #8c8b8b, #464748); 
    }
    
    /* Product page
    ----------------------------*/
    .product_wrap{
      width: 100%;
      position: relative;
      overflow: hidden;
      padding-left: 8px;
    }
    
    .product_arrow{
      position: absolute;
      left:157px;
      bottom:37px;
    }
    
    .triangle-left {
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-right: 15px solid #464748;
        border-bottom: 10px solid transparent;
    }
    
    .product_main{
      position: relative;
      width: 100%;
    }
    .product_main img{
      width: 100%;
    }
    
    .product_title{
      padding-bottom: 10px;
      margin:0px;
      font-size: 1.1em;
      font-weight: 400;
      color: #464748;
    }
    .product_desc{
      margin: 0px;
      color: #717375;
      font-size: 12px;
    }
    
    .product_price{
      color: #464748;  
    }
    
    
    /* Checkout section
    ----------------------------*/
    
    
    .checkout_wrap {
      width: fit-content;
      height: fit-content;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);
    }
    
    .checkout_details {
      height: auto;
      padding: 10px;
      border-radius: 10px;
      background-color: #ccb8f4;
      height: 100%;
      box-sizing: border-box;
    }
    
    .checkout_title {
      margin: 0px;
      padding: 10px 0px;
      font-size: 1.1em;
      font-weight: 400;
      color: black;
    }
    
    .checkout_form {
      width: 100%;
      
      overflow: hidden;
      padding: 10px 0px;
    }
    
    .checkout_form input {
      width: 100%;
      height: auto;
      padding: 8px 10px;
      margin: 8px 0px;
      font-size: 14px;
      border: none;
      border-bottom: 1px solid #717375;
      background-color: transparent;
      color: black;
      box-sizing: border-box;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.020);
      font-family: 'Poppins', sans-serif;
    }
    .checkout_form input:focus {
        outline-width: 0;
    }
    
    ::-webkit-input-placeholder {
      color: grey;
    }
    
    ::-moz-placeholder {
      color: grey;
    }
    
    :-ms-input-placeholder {
      color: grey;
    }
    
    :-moz-placeholder {
      color: grey;
    }
    
    .checkout_pay {
      width: 100%;
      height: auto;
      padding: 8px 10px;
      margin: 8px 0px;
      border: none;
      /* background-color: #F7E4AA; */
      color: #2a2a2a;
      border-radius: 3px;
      font-weight: 400;
      font-family: 'Poppins', sans-serif;
      box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    }
    .checkout{
      display: flex;
      justify-content: center;
      width:100vw;
      margin: 3rem 0rem;
    }
      </style>
  </head>
  
  <body>
    <div>
<?php
include '../../text/Php/accessUser.php';
$cost=0;

function calcCost($pid,$num){
    $con=mysqli_connect("localhost","root","","pharmaz");
    $get=mysqli_query($con,"SELECT Cost from product_details where Product_Id='$pid'");
    $costArray=mysqli_fetch_array($get);
    $cost=$num*$costArray[0];
    return $cost;
}

$new=mysqli_query($con,"SELECT Product_ID,Number from cart_list Where User_ID='$userId'");
while($ren=mysqli_fetch_array($new)){
    $cost=$cost+calcCost($ren[0],$ren[1]);
}

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['pay']))
    {
        pay($cost);
    }
function pay($cost){
    $con=mysqli_connect("localhost","root","","pharmaz");
    $user=$_SESSION["userId"];
    if($cost!=0){
    $history=mysqli_query($con,"Insert into purchase_history (User_ID,Cost) values ('$user','$cost')");
    $storeExistingTemp=mysqli_query($con,"select * from cart_list WHERE User_ID='$user'");
    while($rowResult=mysqli_fetch_row($storeExistingTemp)){
      $updateTempCount=mysqli_query($con,"Update product_details SET tempCount=0,Stock=Stock-'$rowResult[2]' WHERE Product_Id='$rowResult[1]'");}
      $get=mysqli_query($con,"delete FROM cart_list where User_ID='$user'");
      header("Refresh:1");
    }
    
}

?>
<?php
echo "<h1 style='color:white;font-size:35px'>You're buying these items: </h1>";
echo "
";
  $user=$_SESSION["userId"];
  $allQuery="select * from cart_list WHERE User_ID='$user'";
  $res=mysqli_query($con,$allQuery);
  $r=1; 
  echo "<!DOCTYPE html>
        <html>
        <head>
            <style>
                *{
                    padding: 0;
                    margin: 0;
                    font-weight: bold;
                }
                .tab{
                    display:flex;
                    justify-content: space-evenly;
                    height:fit-content;
                    background-color:transparent;
                }
                table{
                    font-size:20px;
                    width:1000px;
                    height:40%;
                    border-spacing: 0px;
                    align-self: center;
                    border-radius: 10px;
                }
                tr,th,td{
                    border:1px solid rgb(255, 162, 247);
                    padding: 10px 0px;
                    text-align: center;
                }
                td{
                    color:white;
                    width:250px;
                    background-color: rgba(155, 71, 252, 0.925);
                }
            </style>
        </head>
        <body>
            <div class='tab'>
                <table>
                    <tbody>   
                        <tr>
                            <td>S. No.</td>
                            <td>Name </td>    
                            <td>Quantity</td>
                            <td>Cost</td>
                        </tr>            
                    </tbody>
                </table>
            </div>
        </body>
        </html>";
  while($Pid=mysqli_fetch_row($res))
  {
    $allCheckQuery=mysqli_query($con,"select * from product_details where Product_ID='$Pid[1]'");
           
    while($row=mysqli_fetch_array($allCheckQuery)){
        echo "<!DOCTYPE html>
        <html>
        <head>
            <style>
                *{
                    padding: 0;
                    margin: 0;
                    font-weight: bold;
                }
                .tab{
                    display:flex;
                    justify-content: space-evenly;
                    height:fit-content;
                    background-color:transparent;
                }
                table{
                    font-size:20px;
                    width:1000px;
                    height:40%;
                    border-spacing: 0px;
                    align-self: center;
                    border-radius: 10px;
                }
                tr,th,td{
                    border:1px solid rgb(255, 162, 247);
                    padding: 10px 0px;
                    text-align: center;
                }
                td{
                    color:white;
                    width:250px;
                    background-color: rgba(155, 71, 252, 0.925);
                }
            </style>
        </head>
        <body>
            <div class='tab'>
                <table>
                    <tbody>   
                        <tr>
                            <td>$r</td>
                            <td>$row[4]</td>    
                            <td>$Pid[2]</td>
                            <td>$row[2]</td>
                        </tr>            
                    </tbody>
                </table>
            </div>
        </body>
        </html>";
        
    }
    $r++;
  }
?>
<div class='checkout'>
        <div class='checkout_wrap'>
          <div class='row'>
      
            <div class='col-xs-8'>
              <!--CHECKOUT-->
              <div class='product_arrow'>
                <div class='triangle-left'></div>
              </div>
              <div class='checkout_details'>
                <div class='col-xs-12'>
                  <h1 class='checkout_title'>Credit/Debit Card Details</h1>
                  <form class='checkout_form'>
                    <input type='name' placeholder='Full Name'>
                    <input class='cc-number' type='text' placeholder='Card Number' maxlength='20'>
                    <div class='row'>
                      <div class='col-xs-6'>
                        <input class='cc-exp' type='name' placeholder='Card Expiry'>
                      </div>
                      <div class='col-xs-6'>
                        <input class='cc-cvc' type='name' placeholder='CVV'>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
<h1 style = 'color:yellow' id='cont'> The Amount Payable is: ₹<?php echo $cost;?>/-</h1>
<div class="btns"><button onclick="window.location.assign('../cart.php')">Go Back to cart</button><form method="POST"><INPUT type="submit" name="pay" value="₹ Pay Now"></form></div>
<a href="../cart.php" class="back"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</div>

</body>
<script>
$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$('.checkout_pay').hide();

$(document).on('keyup', '.cc-number, .cc-cvc, .cc-exp', function (){
	var cname = $('.cc-number').val();
	var ccvc = $('.cc-cvc').val();
	var cexp = $('.cc-exp').val();

	if( cname != "" && ccvc != "" && cexp !="" ){
		$('.checkout_pay').fadeIn(300);
	}

});
</script>
</html>