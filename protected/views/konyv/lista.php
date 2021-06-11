<div class="container-fluid">
<br/>
<h1 class="text-center">Adatbázisban tárolt könyvek listája</h1>
<br/>
<h1 class="text-left"> <a href="<?=BASE_URL?>?E=konyv&M=hozzaad">Könyv hozzáadás</h1></a>

<?php if($result == null || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else : ?>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Könyv címe</th>
            <th scope="col">Könyv témája</th>
            <th scope="col">Könyv kiadásának éve</th>
            <th scope="col">Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as &$row): ?>
        <tr>
            <td><?=$row['cim']?></td>
            <td><?=$row['tema']?></td>
            <td><?=$row['kiadaseve']?></td>
            <td>
                <a href="<?=BASE_URL?>?E=konyv&M=megtekint&P=<?=$row['id']?>">Megtekint</a>
                <a href="<?=BASE_URL?>?E=konyv&M=szerkeszt&P=<?=$row['id']?>">Szerkeszt</a>
                <a href="<?=BASE_URL?>?E=konyv&M=torol&P=<?=$row['id']?>">Töröl</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>
</div>


