<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <title>Order</title>

    <style>
        .inputbox input{
            width: 100%;
        }
        
    </style>
</head>
<body>


     <div class="container">
         <form action="order2.php" method="POST">
    <div class="row">

            <div class="firstcolum">
                 <h3 class="title"> payment info</h3>
                 <div class="inputbox">
                    <span>Fill Name:</span>
                    <input type="text" name="name" placeholder="Enter Your Name">
                 </div>

                 <div class="inputbox">
                    <span>Email:</span>
                    <input type="text" name="email" placeholder="Enter Your Email">
                 </div>
                 
                 <div class="inputbox">
                    <span>Cards:</span>
                   <img src="card_pic.png" alt="">
                 </div>
                 <div class="inputbox">
                    <span>Cardholder Name:</span>
                    <input type="text" name="holderName" placeholder="Enter Your Name">
                 </div>
                 <div class="inputbox">
                    <span>Credit card Number:</span>
                    <input type="text" name="card"  placeholder="111-222-333">
                 </div>
                 
                

 
                 <div class="inputbox">
                    <span>Exp Month:</span>
                    <input type="text" name="expireM" placeholder="January">
                 </div>

                 <div class="inputbox">
                    <span>CVV:</span>
                    <input type="text" name="cvv"  placeholder="1234">
                 </div>
                 </div>

</div>


   <input type="submit" name="submit" value="SUBMIT" class="submit-btn">
</form>



     </div>
</body>
</html>