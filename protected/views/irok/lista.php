<br/>
<h2>Írók listája</h2>
<a href="<?=BASE_URL?>?E=irok&M=hozzaad">Hozzáadás</a>

<?php if($result == null || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else : ?>
<table>
    <thead>
        <tr>
            <th>Író neve</th>
            <th>Születési éve</th>
            <th>Kiadott könyvek száma</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as &$row): ?>
        <tr>
            <td><?=$row['username']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['active']?></td>
            <td>
                <a href="<?=BASE_URL?>?E=felhasznalok&M=megtekint&P=<?=$row['id']?>">Megtekint</a>
                <a href="<?=BASE_URL?>?E=felhasznalok&M=szerkeszt&P=<?=$row['id']?>">Szerkeszt</a>
                <a href="<?=BASE_URL?>?E=felhasznalok&M=torol&P=<?=$row['id']?>">Töröl</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>