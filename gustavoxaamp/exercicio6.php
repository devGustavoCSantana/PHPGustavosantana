<html>
 <head>
  <title>Exercicio 06</title>

 </head>
 <body>
 <form action="" method="get">
  Lado 1:  
  <input type="number" name="num1" /><br />
  Lado 2:  
  <input type="number" name="num2" /><br />
  Lado 3:  
  <input type="number" name="num3" /><br />

  <input type="submit" name="submit" value="Testar" />

 </form> 
 <?php 
  $a = $_GET['num1'];
  $b = $_GET['num2'];
  $c = $_GET['num3'];

  if( ($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){
   if($a==$b && $b==$c)
    echo "Triângulo equilátero";
   elseif ($a==$b || $a==$c || $b==$c)
    echo "Triângulo isósceles";
   else
    echo "Triângulo escaleno";
  }else
   echo "O triângulo não existe";
 ?>
 </body>
</html>