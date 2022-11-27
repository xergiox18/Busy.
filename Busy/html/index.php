<!DOCTYPE HTML>
<html>
<head>
<title>pago paypal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="css/amount.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    

<form class="form-amount" action="index.php" method="post">
    <img class="logo img-responsive" src="images/logo.png" alt="busy" height="65" width="300"><br/>
    <div class="form-group">
        <label for="concept">Concepto</label>
        <input type="text" readonly value="Pasaje a tebaida" id="concept" name="concept" class="form-control" >
    </div>
    <div class="form-group">
        <label for="amount">Importe</label>
        <input type="text" readonly value="9600" id="amount" name="amount" class="form-control">
    </div>
    <a href="recibo-ticket.html"><input readonly class="btn btn-lg btn-primary btn-block" name="submitPayment"  value="Pagar"></a>
    <img class="img-responsive" src="img/paypal.png" alt="Pagos con PayPal y PHP" height="65" width="300"><br/>
</form> 

</div>
</body>
</html>