
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo!</title>
    <style type="text/css">
        .page-header{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem vindo!!</h1>
        <h2>Você está logado</h2>
        <p>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
        </p>
    </div>

</body>
</html>