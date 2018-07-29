<?php


  function DD($diziadi){ // Dump Data
    echo "<pre>";
    print_r($diziadi);
    echo "</pre>";
  } // DD

  function HarftenIsimleriListe($ArananHarf, $ArananCinsiyet) {
    $satirlar = file("php/isimler.txt");
    foreach ($satirlar as $satir) {
      list($AD, $ANLAM, $Cinsiyet) = isimBol($satir);
      $harf = mb_substr($AD, 0, 1);
      if($harf == $ArananHarf and $Cinsiyet == $ArananCinsiyet) {
        echo "<div class='col-md-2'><a href='index.php?sayfa=e&isim=$AD' class='btn btn-dark btn-block mb-3 p-2'>$AD</a></div>";
      }
    }
  } // HarftenIsimleriListe

  function TekIsimListele($ArananIsim) {
    $satirlar = file("php/isimler.txt");
    foreach ($satirlar as $satir) {
      list($AD, $ANLAM, $Cinsiyet) = isimBol($satir);
      $AD         = mb_strtoupper($AD, 'UTF-8');
      $ArananIsim = mb_strtoupper($ArananIsim, 'UTF-8');
      if($AD == $ArananIsim) {
        return "<h1 class='display-2'>$AD</h1>
                <p class='lead'>$ANLAM</p>
                <hr class='my-4'>
                <p>".SEOListesiYaz($AD)."</p>";
      }
    }
  } // HarftenIsimleriListe

  function isimBol($SATIR) {
    $SATIR = str_replace("Â", "A", $SATIR);
    $SATIR = str_replace("Î", "İ", $SATIR);
    list($AD, $ANLAM1, $ANLAM2, $ANLAM3 ) = explode(":", $SATIR);
    $ANLAM = "$ANLAM1 $ANLAM2 $ANLAM3";
    $Erkek = strpos($ANLAM, " Er. ");
    $Kadin = strpos($ANLAM, " Ka. ");
    $Uniseks = strpos($ANLAM, "Erkek ve kadın adı olarak kullanılır");
    $Cinsiyet = "";
    if($Erkek > 0 and $Kadin == "") $Cinsiyet="e";
    if($Erkek == "" and $Kadin > 0) $Cinsiyet="k";
    if($Uniseks > 0) $Cinsiyet="u";
    return array($AD, $ANLAM, $Cinsiyet);
  } // isimBol

  function SEOListesiYaz($AD){
    $SONUC = "";
    $AD = " <b>$AD</b>";
    $SONUC .= "$AD ne anlama geliyor?";
    $SONUC .= "$AD ne demek?";
    $SONUC .= "$AD isminin anlamı?";
    $SONUC .= "$AD isminin anlamı nedir";
    $SONUC .= "$AD kelimesinin anlamı nedir";
    $SONUC .= "$AD nedir?";
    $SONUC .= "$AD isminin manası nedir?";
    $SONUC .= "$AD erkek ismi midir?";
    $SONUC .= "$AD Kız ismi midir?";
    $SONUC .= "$AD erkek adı midir?";
    $SONUC .= "$AD Kız adı midir?";
    return $SONUC;
  } // SEOListesiYaz






 ?>
