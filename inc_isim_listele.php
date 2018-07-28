<div class="container">
    <div class="row mt-3">
      <div class="col-md-12">
        <?php
          $HARF = $_GET["harf"];
          echo "<h1>$HARF Harfi İle Başlayan İsimler</h1>";
        ?>
      </div>
    </div>

    <div class="row">
        <?php HarftenIsimleriListe( $_GET["harf"], $_GET["sayfa"] ); ?>
    </div>

  </div>
