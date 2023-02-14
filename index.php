<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="?pagina=1">Pagina1</a>
    <a href="?pagina=2">Pagina2</a>
    <a href="?pagina=3">Pagina3</a>

<h1>Pagina Home</h1>
    </form>
    <?php
     if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
        switch($pagina){
            case '1':
                require_once './pagina/pagina1.php';
                break;
            case '2':
                require_once './pagina/pagina2.php';
                break;
            case '3':
                require_once './pagina/pagina3.php';
                break;
            default:
            require_once './pagina/pagina404.php';
        }
        
        
     }

    ?>
</body>
</html>