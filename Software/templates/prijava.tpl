<div id="greska" style="color:red">
    {$neuspjeh}
</div>
<form id="prijava" method="get" name="form1" action="" style="display:flex; justify-content: center;">
    <p><label for="korIme">Korisničko ime: </label><br>
        <input type="text" id="korIme" name="korIme" size="20" maxlength="20" placeholder="Korisničko ime" value="{$korIme}"><br>
        <label for="lozinka">Lozinka: </label><br>
        <input type="password" id="lozinka" name="lozinka" size="20" maxlength="30" placeholder="Lozinka"><br>
        <label for="zapamti">Zapamti me: </label>
        <input type="checkbox" id="zapamti" name="zapamti"><br>
        <input id="submitPrijava" name="submit" type="submit" value=" Prijavi se ">
</form>
<a href="{$putanja}/obrasci/zaboravljenaLozinka.php" style="display:flex; justify-content: center; color: white;">Zaboravljena lozinka</a> 