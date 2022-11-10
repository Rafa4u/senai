<!DOCTYPE html>

<html>
 <head>
    <meta charset="utf-8">
    <title>Lógica de Programação com PHP - Hipoteticus</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap&quot; rel="stylesheet">

 </head>
 <header><center>
    <h1>Hipotheticus - cálculo de Salário bruto mais comissão - Atividade 4</h1></center>
 </header>
 <body>
 
<div>

<form action='index.php' method="get">
<h3>Cálculo de Salário mais comissão</h3><br>
<label class="salario">Insira o valor total das vendas</label><input type="text" name="valor"><br>
<p><input type="submit" value="Calcular" class="botao"></p>
</form>

<section>
<?php 
    $vendas = $_GET['valor'];
    
    $salariobase = 1500;
    $taxamenor = 0.03;
    $taxamaior = 0.05;


    if($vendas == "" or $vendas <0){
        echo "<br>Digite o valor total das vendas";
 }

    else if($vendas <= 15000){
        echo "O Salário do Vendedor é: R$";
        echo $vendas*$taxamenor+$salariobase;

    }
    
    else if($vendas > 15000){
        echo "O Salário do Vendedor é: R$";
        echo $vendas*$taxamaior+$salariobase;

    }

?>
</section>
</div>
