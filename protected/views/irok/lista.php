<div class="container">
<br/>
<h1 class="text-center">Adatbázisban tárolt írók/költők listája</h1>
<br/>
<h1 class="text-left"> <a target="_blank" href="<?=BASE_URL?>?E=irok&M=hozzaad">Író felvétel</h1></a>
<h1 class="text-left"> <a href="<?=BASE_URL?>?E=irok&M=letolt">Adatbázis letöltése</h1></a>

<?php if($result == null || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else : ?>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Író neve</th>
            <th scope="col">Születési éve</th>
            <th scope="col">Kiadott könyvek száma</th>
            <th scope="col">Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?=$row['nev']?></td>
            <td><?=$row['szuletesiev']?></td>
            <td><?=$row['konyvekszama']?></td>
            <td>
                <a href="<?=BASE_URL?>?E=irok&M=megtekint&P=<?=$row['id']?>">Megtekint</a>
                <a target="_blank" href="<?=BASE_URL?>?E=irok&M=szerkeszt&P=<?=$row['id']?>">Szerkeszt</a>
                <a href="<?=BASE_URL?>?E=irok&M=torol&P=<?=$row['id']?>">Töröl</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>
</div><
