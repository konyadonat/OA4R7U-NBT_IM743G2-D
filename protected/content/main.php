<h1 class="text-center">Projekt leírás</h1>
</br>

<h1 class="display-6">Elképzelés</h1>

<p>
    Az elképzelés egy olyan adatbázissal dolgozó könyvtár management weboldal készítese,
    amely dinamikusan működik. <br/>
    A projektben 5 adattábla van használatban, ezek az irok,konyv,konyvtar,kiado és a kolcsonzok. <br/>
</p>

<br/>

<dl class="row">
  <dt class="col-sm-3">irok</dt>
  <dd class="col-sm-9">Ebben a táblában találhatóak az írók/költök adatai(azonosító, név,születési év, kiadott könyvek száma).</dd>

  <dt class="col-sm-3">konyv</dt>
  <dd class="col-sm-9">
    E táblában található a könyvről származó adatok(könyv azonosító, kiadója azonosítója, író azonosítója, könyvtár azonosító, címe, köny témája, kiadás éve).
  </dd>

  <dt class="col-sm-3">konyvtar</dt>
  <dd class="col-sm-9">A könyvtárhoz kapcsolódó adatok vannak benne(könyvtár azonosító, könyvtár neve, irányító szám, címe.)</dd>

  <dt class="col-sm-3">kiado</dt>
  <dd class="col-sm-9">Kiadóhoz kötődő adatokat tartalmaz(kiadó azonosító, név).</dd>

  <dt class="col-sm-3">kolcsonzok</dt>
  <dd class="col-sm-9">
    A könyv kölcsönzők adatai. (id, könyvid, név, irányító szám, cím). 
  </dd>
</dl>
<br/>
<p>
    Elkészítettem egy tervet az elképzelt adatmodellről. </br>
    <img class="img-thumbnail" width="500" src=<?=IMG_DIR.'/adatmodell.jpg'?>>
</p>

<?php
function lista(){
}