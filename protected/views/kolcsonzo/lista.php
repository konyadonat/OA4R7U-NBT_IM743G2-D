<div class="container">
<br/>
<h1 class="text-center">Adatbázisban tárolt kölcsöznőink listája</h1>
<br/>
<h1 class="text-left"> <a href="<?=BASE_URL?>?E=kolcsonzo&M=hozzaad">Kölcsöznő felvétele</h1></a>
<h1 class="text-left"> <a href="<?=BASE_URL?>?E=kolcsonzo&M=letolt">Adatbázis letöltése</h1></a>

<?php if($result == null || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else : ?>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Könyv azonosítója</th>
            <th scope="col">Kölcsönző neve</th>
            <th scope="col">Kölcsönző irányítószáma</th>
            <th scope="col">Kölcsönző címe</th>
            <th scope="col">Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?=$row['konyvid']?></td>
            <td><?=$row['nev']?></td>
            <td><?=$row['iranyitoszam']?></td>
            <td><?=$row['cim']?></td>
            <td>
                <a href="<?=BASE_URL?>?E=kolcsonzo&M=megtekint&P=<?=$row['id']?>">Megtekint</a>
                <a href="<?=BASE_URL?>?E=kolcsonzo&M=szerkeszt&P=<?=$row['id']?>">Szerkeszt</a>
                <a href="<?=BASE_URL?>?E=kolcsonzo&M=torol&P=<?=$row['id']?>">Töröl</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>
</div>


