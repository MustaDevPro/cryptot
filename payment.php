
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crypto Tech - pay</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark d-flex justify-content-center align-items-center" style="background-image: url(images/cinemaback.jpg); width: 100%;height: 100%; position: absolute;">

            <div class="p-5 shadow" style="width:40%; height:50vh;">
                <div class="text-center">
                    <h1 class="h4 text-white mb-4">Crypto Tech Easy Pay</h1>
                </div>

                <form class="user" action="payment/pay.php" method="POST">
                    <div class="form-group">
                        <label for="floatingInputValue" class="text-white">Enter Email</label>
                        <input type="text" name="email" class="form-control form-control-user" aria-describedby="emailHelp"
                            placeholder="Enter Email" require>
                    </div> 
                    
                    
                    <div class="form-group">
                        <label for="floatingInputValue" class="text-white">Amount to be paid: <span class="text-danger"><?php print $_GET['price'];?></span></label>
                        <input type="hidden" name="amount" value="<?php print $_GET['price'];?>">
                        <input type="hidden" name="proid" value="<?php print $_GET['proid'];?>"><br>
                        <label for="floatingInputValue" class="text-white">Product: <span class="text-danger"><?php print $_GET['prodnm'];?></span></label>

                    </div>
                    <input type="submit" value="Pay Now" name="pay" class="btn btn-primary w-100">
                    
                </form>
            </div>


</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</html>