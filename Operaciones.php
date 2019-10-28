<?php
$ta = 0;

if(isset($_POST["calcular"])){
  $ecuacion=$_POST["ecuacion"];
  $interA = $_POST["int_a"];
  $interB = $_POST["int_b"];
  $Ea = $_POST["error"];
  if ($ecuacion != '' && $interA != '' && $interB != '') {
    if ($Ea == "") {
      #**************************************************************************************?
      #echo("Sin Error");
      #echo "Prueba de Entradas: Ecuacion = " . $ecuacion . " Intervalo A = " . $interA . " Intervalo B = " . $interB . "<br>" ;
      #echo "f(a) = "; 
      $fa = fdx($ecuacion , $interA);
      #echo "<br> f(b) = "; 
      $fb = fdx($ecuacion , $interB);
      #echo "<br><br>f(a)=".$fa." f(b)=".$fb."<br>";
      if ($fa * $fb < 0) {
        $ta = 1;
        #echo "Se Cumple - Aplicar la Ecuacion - a+(b-a)/2 <br>";
        #echo "xi =".$xi;
        #echo "<br>Calcular f(xi) | Reemplazar xi= ".$xi." En la Ecuacion: ".$ecuacion."<br>";
        if($ta == 1){
          for ($i = 1; $i <= 16; $i++) {
            if ($i==1) {
              $a = $interA;
              $b = $interB;
              $xi = ($a+($b-$a)/2);
              $fxi = fdx($ecuacion , $xi);
              $xii = ($b-$a)/2;
              echo "<tr><td>$i</td><td>$a</td><td>$b</td><td>$fa</td><td>$fb</td><td>$xi</td><td>$fxi</td><td>$xii</td></tr>";
              }else{
                if ($fa * $fxi < 0) {
                  $a = $a;
                  if ($fb * $fxi < 0) {
                    $b = $b;
                  }else{
                    $b = $xi;
                  }
                }else{
                  $a = $xi;
                  if ($fb * $fxi < 0) {
                    $b = $b;
                  }else{
                    $b = $xi;
                  }
                }
                $fa = fdx($ecuacion , $a);
                $fb = fdx($ecuacion , $b);
                $xi = ($a+($b-$a)/2);
                $fxi = fdx($ecuacion , $xi);
                $xii = ($b-$a)/2;
                echo "<tr><td>$i</td><td>$a</td><td>$b</td><td>$fa</td><td>$fb</td><td>$xi</td><td>$fxi</td><td>$xii</td></tr>";
              }
          }
        }
      
    }else{
      echo "<div class='alert alert-danger'  role='alert'>La Ecuacion ó Los Valores Del Intervalo No Son Validos</div>";
      $ta = 0;
    }
      #**************************************************************************************?
    }else{
      #**************************************************************************************¿
      #echo("con error".$Ea);
      #echo "f(a) = "; 
      $fa = fdx($ecuacion , $interA);
      #echo "<br> f(b) = "; 
      $fb = fdx($ecuacion , $interB);
      #echo "<br><br>f(a)=".$fa." f(b)=".$fb."<br>";
      if ($fa * $fb < 0) {
        $ta = 1;
        #echo "Se Cumple - Aplicar la Ecuacion - a+(b-a)/2 <br>";
        #echo "xi =".$xi;
        #echo "<br>Calcular f(xi) | Reemplazar xi= ".$xi." En la Ecuacion: ".$ecuacion."<br>";
        if($ta == 1){
          for ($i = 1; $i<=16; $i++) {
            if ($i==1) {
              $a = $interA;
              $b = $interB;
              $xi = ($a+($b-$a)/2);
              $fxi = fdx($ecuacion , $xi);
              $xii = ($b-$a)/2;
              echo "<tr><td>$i</td><td>$a</td><td>$b</td><td>$fa</td><td>$fb</td><td>$xi</td><td>$fxi</td><td>$xii</td></tr>";
              if($xii <= $Ea){
                $i = 16;
              }
            }else{
              if ($fa * $fxi < 0) {
                $a = $a;
                if ($fb * $fxi < 0) {
                  $b = $b;
                }else{
                  $b = $xi;
                }
              }else{
                $a = $xi;
                if ($fb * $fxi < 0) {
                  $b = $b;
                }else{
                  $b = $xi;
                }
              }
              $fa = fdx($ecuacion , $a);
              $fb = fdx($ecuacion , $b);
              $xi = ($a+($b-$a)/2);
              $fxi = fdx($ecuacion , $xi);
              $xii = ($b-$a)/2;
              echo "<tr><td>$i</td><td>$a</td><td>$b</td><td>$fa</td><td>$fb</td><td>$xi</td><td>$fxi</td><td>$xii</td></tr>";
              if($xii <= $Ea){
                $i = 16;
              }
            }
          }#finfor
        }
      }else{
        echo "<div class='alert alert-danger'  role='alert'>La Ecuacion ó Los Valores Del Intervalo No Son Validos</div>";
        $ta = 0;
      }
      #**************************************************************************************¿
    } 
  }else{
    echo "<div class='alert alert-danger'  role='alert'>Rellene todos los Campos, Gracias.</div>";  
  }
}

function fdx($ec,$it){
  #code ...
  return $re;
}
 ?>
