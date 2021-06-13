</br>
<div class="container">
<h2>Író rögzítése</h2>
<form action="" method="POST" accept-charset="UTF-8">
        <div class="form-group">
            <label for="nev">Író neve: </label>
            <input class="form-control" type="text" name="nev" required="required" id="nev" minlength="6" maxlength="30"/> <br/>
        </div>
        <div class="form-group">
            <label for="szuletesiev">Író születési éve: </label>
            <input class="form-control" type="text" name="szuletesiev" required="required" id="szuletesiev" minlength="4" maxlength="4"/> <br/>
        </div>
        <div class="form-group">
            <label for="konyvekszama">Kiadott könyvek száma: </label>
            <input type="text" class="form-control" name="konyvekszama" required="required" id="konyvekszama" maxlength="4"/> <br/>
        </div>
        <button type="submit" name="submit" value="1">Mentés </button>
    </form>
</div>