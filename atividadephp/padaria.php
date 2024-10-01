<?php
echo "<h1>Relatório de vendas HOTPÃO</h1>";

$npaes = 150;
$ncafe = 250;

$total_paes = $npaes * 1.35;
$total_cafes = $ncafe * 2.25;
$total_vendas = $total_cafes + $total_paes;
$media_vendas = $total_vendas / 2;

echo "<p>Cafés: ".formatar($ncafe)."</p>";
echo "<p>Pães: ".formatar($npaes)."</p>";
echo "<p>Média de vendas: ".formatar($media_vendas)."</p>";
echo "<p>Total vendas: ".formatar($total_vendas)."</p>";

function formatar($n){
    $x = number_format($n, 2, ",", ".");
    return $x;
}