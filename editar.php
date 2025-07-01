<?php 
    include 'conexao.php';
    $id = $_POST['id'];
    $resultado = $pdo->prepare("SELECT * FROM produto WHERE id = ?");
    $resultado->execute([$id]);
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar produto</h1>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="">

    <p>Nome:</p>
    <input type="text" name="nome" value="">
    
    <p>Preço:</p>
    <input type="text" name="preco" value="">

    <input type="submit" value="Atualizar">
</form>


</body>
</html>