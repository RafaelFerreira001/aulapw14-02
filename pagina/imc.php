<h1>Pagina IMC</h1>
<form method="post">
    <input type="number" name="input_peso" placeholder="Informe o peso em KG">
    <input type="double" name="input_altura" placeholder="Informe a altura em M">
    <br>
    <input type="submit" value="calcular" name="input_calc">
</form>

<?php
    if(isset($_POST['input_calc'])){
        $calc = $_POST['input_calc'];
        $peso = $_POST['input_peso'];
        $altura = $_POST['input_altura'];
        $resultado = $peso / ($altura * $altura);
        echo"<h3> peso: $peso ÷ altura: $altura ^2 = $resultado</h3>";
        if($resultado < 18.5 ){
            echo"<h3> seu IMC: $resultado é considerado: BAIXO PESO</h3>";
        }
    else if($resultado < 24.99 ){
        echo"<h3> seu IMC: $resultado é considerado: NORMAL</h3>";
    }
    else if($resultado < 29.99 ){
        echo"<h3> seu IMC: $resultado é considerado: SOBREPESO</h3>";
    }
    else {
        echo"<h3> seu IMC: $resultado é considerado: OBESIDADE</h3>";
    }
    }
    
   

?>
