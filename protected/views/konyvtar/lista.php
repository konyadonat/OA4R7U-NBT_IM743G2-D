<div class="container-fluid">
<br/>
<h1 class="text-center">Adatbázisban tárolt könyvtárak listája</h1>
<br/>
<h1 class="text-left"> <a href="<?=BASE_URL?>?E=konyvtar&M=hozzaad">Könyvtár felvétel</h1></a>

<?php if($result == null || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else : ?>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Könyvtár neve</th>
            <th scope="col">Könyvtár irányítószáma </th>
            <th scope="col">Könyvtár címe</th>
            <th scope="col">Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as &$row): ?>
        <tr>
            <td><?=$row['nev']?></td>
            <td><?=$row['iranyitoszam']?></td>
            <td><?=$row['cim']?></td>
            <td>
                <a href="<?=BASE_URL?>?E=konyvtar&M=megtekint&P=<?=$row['id']?>">Megtekint</a>
                <a href="<?=BASE_URL?>?E=konyvtar&M=szerkeszt&P=<?=$row['id']?>">Szerkeszt</a>
                <a href="<?=BASE_URL?>?E=konyvtar&M=torol&P=<?=$row['id']?>">Töröl</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>
</div>

