<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStHk1kNEu6UGJ2PfqAAvj-eNZNRoqm4XYFNw&s" type="image/x-icon">
    <title>Ingressos</title>
</head>
<body>
    <h1>Ingressos do Gummy Bear</h1> 
    <form method="POST"> 
        <label for="nome">Digite seu nome:</label> 
        <input type="text" name="nome" placeholder="Digite o seu nome" require>
        <br>
        <br>
        <label for="idade">Digite sua idade:</label> 
        <input type="number" name="idade" id="idade" required>  
        <br>
        <br>
        <select name="ingresso">
            <option value="VIP">VIP</option>
            <option value="Regular">Regular</option>
            <option value="Basico">Básico</option>
        </select>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        $idade = $_POST['idade'];
        $nome = $_POST['nome'];
        $ingresso = $_POST['ingresso'];
        echo "Bem vindo $nome!";

        if ($idade <= 18) { 
            echo "<p>Ingresso não permitido para menores de 18 anos.</p>"; 
        }
        else {
            switch($ingresso){
            case 'VIP':
                $preço = 100.00;
                $ingresso = "VIP";
                break;
            case 'Regular':
                $preço = 50.00;
                $ingresso = "Regular";
                break;
            case 'Basico':
                $preço = 20.00;
                $ingresso = "Básico";
                break;
            default :
            echo " Escolha o ingresso";
            exit;
            }
            echo "<p>Você escolheu $ingresso.</p>";
            echo "Valor do ingresso: R$" . number_format($preço, 2, ',' , '.');
        }
    }
    ?>
</body>
</html>