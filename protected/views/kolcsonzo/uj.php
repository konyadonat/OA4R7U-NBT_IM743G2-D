</br>
<div class="container">
<h2>Kölcsönző rögzítése</h2>
<form action="" method="POST" accept-charset="UTF-8">
        <div class="form-group">
            <label for="konyvid">Könyv azonosítója: </label>
            <input class="form-control" type="text" name="konyvid" required="required" id="konyvid" /> <br/>
        </div>
        <div class="form-group">
            <label for="nev">Kölcsöznő neve: </label>
            <input class="form-control" type="text" name="nev" required="required" id="neve" /> <br/>
        </div>
        <div class="form-group">
            <label for="iranyitoszam">Kölcsönző irányítószáma: </label>
            <input type="text" class="form-control" name="iranyitoszam" required="required" id="iranyitoszam" maxlength="4"/> <br/>
        </div>
        <div class="form-group">
            <label for="cim">Kölcsönző címe: </label>
            <input type="text" class="form-control" name="cim" required="required" id="cim" maxlength="40"/> <br/>
        </div>
        <button type="submit" name="submit" value="1">Mentés </button>
    </form>
</div>