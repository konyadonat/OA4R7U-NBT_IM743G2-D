<div class="container-fluid">
<br/>
<h1 class="text-center">Adatbázisban tárolt kiadók listája</h1>
<br/>
<h1 class="text-left"> <a href="<?=BASE_URL?>?E=kiado&M=hozzaad">Író felvétel</h1></a>

<?php if($result == null || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else : ?>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Kiadó neve</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as &$row): ?>
        <tr>
            <td><?=$row['nev']?></td>
            <td>
                <a href="<?=BASE_URL?>?E=kiado&M=megtekint&P=<?=$row['id']?>">Megtekint</a>
                <a href="<?=BASE_URL?>?E=kiado&M=szerkeszt&P=<?=$row['id']?>">Szerkeszt</a>
                <a href="<?=BASE_URL?>?E=kiado&M=torol&P=<?=$row['id']?>">Töröl</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>
</div>
