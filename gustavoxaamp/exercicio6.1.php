<html>
 <head>
  <title>Aula exercicio PHP</title>
 </head>
 <body>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>lado1</label>
    <input type="number
</form>
 <?php
    function triangulo($a,$b,$c){
        if((($a+$b)>$c) && (($a+$c)>$b) && (($b+$c)>$a)){
            if(($a == $b) && ($b == $c)){
                $resp = "Equilátero";
            }else if(($a == $b) || ($a == $c) || ($b == $c)){
                $resp = "Isósceles";
            }else{
                $resp = "Escaleno";
            }
        }else{
            $resp = "Não é triangulo";
        }
        return $resp;
    }
    
     if($_SERVER["REQUEST_METHOD"] == "POST"){
            $lado1 = $_POST['lado1'];
            $lado2 = $_POST['lado2'];
            $lado3 = $_POST['lado3'];

            $resp = triangulo($lado1,$lado2,$lado3);


            echo "<p>$resp</p>";
        }
        
 ?>
 </body>
</html>