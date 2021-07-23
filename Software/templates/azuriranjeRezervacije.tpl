<div id="greska" style="color:red">
    {$neuspjeh}
</div>
<form id="rezervacija" method="post" name="rezervacija" action="" style="display: flex; justify-content: center;">
    <p><label for="grupa">Odabir grupe: </label><br>
        <select id="grupa" name="grupa">
        </select><br>
        <label for="datum">Datum proslave: </label><br>
        <input type="date" id="datum" name="datum" value="{$datum}"><br>
        <label for="vrijeme">Vrijeme proslave: </label><br>
        <input type="time" id="vrijeme" name="vrijeme" value="{$vrijeme}"><br>
        <label for="brojDjece">Broj djece: </label><br>
        <input type="text" id="brojDjece" name="brojDjece" size="20" maxlength="3" placeholder="Broj djece" value="{$brojDjece}"><br>
        <label for="sudionici">Sudionici: </label><br>
        <textarea id="sudionici" name="sudionici" rows="20" cols="50">{$sudionici}</textarea><br>
        <label for="upute">Upute: </label><br>
        <textarea id="upute" name="upute" rows="20" cols="50">{$upute}</textarea><br>
        <input id="submitRezervacija" name="submitRezervacija" type="submit" value=" Rezerviraj ">
</form>