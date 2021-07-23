<div id="greska" style="color:red">
    {$neuspjeh}
</div>
<form id="rodendan" method="post" name="rodendan" action="" style="display:flex; justify-content: center;">
    <p><label for="naziv">Naziv: </label><br>
        <input type="text" id="naziv" name="naziv" size="20" maxlength="45" placeholder="Naziv rođendana" value="{$naziv}"><br>
        <label for="opis">Opis: </label><br>
        <textarea id="opis" name="opis" rows="20" cols="50">{$opis}</textarea><br>
        <input id="submitRodendan" name="submitRodendan" type="submit" value=" Ažuriraj rođendan ">
</form>