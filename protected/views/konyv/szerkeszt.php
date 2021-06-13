</br>
<div class="container">
<h2>Könyv rögzítése</h2>
<form action="" method="POST" accept-charset="UTF-8">
        <div class="form-group">
            <label for="cim">Könyv címe: </label>
            <input type="text" class="form-control" name="cim" required="required" id="cim" maxlength="40"/> <br/>
        </div>
        <div class="form-group">
            <label for="tema">Könyv témája: </label>
            <input type="text" class="form-control" name="tema" required="required" id="tema" maxlength="20"/> <br/>
        </div>
        <div class="form-group">
            <label for="kiadaseve">Könyv kiadásának éve: </label>
            <input type="text" class="form-control" name="kiadaseve" required="required" id="kiadaseve" maxlength="4"/> <br/>
        </div>
        <button type="submit" name="submit" value="1">Mentés </button>
    </form>
</div>