<?php

  $Cinsiyet="e";
  $Cinsiyet=$_GET["sayfa"];
  $harfler=array("A","B","C","Ç","D","E","F","G","H","I","İ","J","K","L","M","N","O","Ö","P","R","S","Ş","T","U","Ü","V","Y","Z");
  foreach ($harfler as $harf) {
    echo "<a href='index.php?sayfa=$Cinsiyet&harf=$harf' class='btn btn-lg btn-primary mr-1'> $harf </a> <br>\n";
    if($harf=="L") echo "<br><br>";
  }

?>
