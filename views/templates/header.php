<html>
    <head>
        <title>backend-php</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">você esta logado na conta: <?php echo $account1->type;?> - <?php echo $account1->id; ?></a>
            <a class="navbar-brand">Seu saldo é: <?php echo $account1->balance; ?></a>
        </nav>
