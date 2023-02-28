<h1>Pagina Custo Viagem</h1>
<form method="post">
    <p>Informe a quantidade de KM por litro do altomovel</p> 
    <input type="number" name="input_kmporl" placeholder="Informe a quantidade de KM por litro do altomovel">
    <p>Informe a quantidade de KM que sera percorrido</p>
    <input type="number" name="input_kmtotal" placeholder="Informe a quantidade de KM que sera percorrido">
    <p>Informe o valor do combustivel</p>
    <input type="double" name="input_combustivel" placeholder="Informe o valor do combustivel">
    <br>
    <br>
    
    <input type="submit" value="calcular" name="input_calc">
</form>

<?php
    if(isset($_POST['input_calc'])){
        $calc = $_POST['input_calc'];
        $kmporl = $_POST['input_kmporl'];
        $kmtotal = $_POST['input_kmtotal'];
        $comustivel = $_POST['input_combustivel'];
        $resultado = $kmtotal / $kmporl * $comustivel;
        echo"<h3> Você ira gastar: R$: $resultado</h3>";
        
    }