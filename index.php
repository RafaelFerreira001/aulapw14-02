<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">Menu</a>
    <a href="?pagina=home">Home</a>
    <a href="?pagina=tabuada">Tabuada</a>
    <a href="?pagina=imc">IMC</a>
    <a href="?pagina=custviagem">Custo viagem</a>
    <a href="?pagina=sobre">Sobre</a>

<h3>Pagina Menu</h3>
    </form>
    <?php
     if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
        switch($pagina){
            case 'tabuada':
                require_once './pagina/tabuada.php';
                break;
            case 'imc':
                require_once './pagina/imc.php';
                break;
            case 'custviagem':
                require_once './pagina/custviagem.php';
                break;
            case 'sobre':
            require_once './pagina/sobre.php';
            break;
            case 'home':
                require_once './pagina/home.php';
                break;
        }
        
        
     }

    ?>
</body>
</html>