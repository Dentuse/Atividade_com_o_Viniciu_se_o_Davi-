<meta charset="utf8"> 
<?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    echo "<h2>Parabéns, você foi cadastrado com sucesso!!!</h2>";
    echo "<h3>Suas informações são:</h3>";
    echo "Nome: ".$nome."<br>";
    echo "Endereço: ".$endereco."<br>";
    echo "Telefone: ".$telefone."<br>";
    echo "Senha: ".$senha."<br>";
?>