<div id="greska" style="color:red">
    {foreach $greske as $k => $v}
    Nije ispravno uneseno: {$v}<br>
    {/foreach}
    {$provjeraLozinke}
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form id="registracija" method="post" name="form1" action="" style="display: block;">
    <p><label for="ime">Ime: </label><br>
        <input type="text" id="ime" name="ime" size="30" maxlength="30" placeholder="Ime"><br>
        <label for="prez">Prezime: </label><br>
        <input type="text" id="prez" name="prez" size="30" maxlength="35" placeholder="Prezime"><br>
        <label for="email">Email adresa: </label><br>
        <input type="email" id="email" name="email" size="30" maxlength="50" placeholder="ime.prezime@posluzitelj.xxx"><br>
        <label for="korIme">Korisničko ime: </label><br>
        <input type="text" id="korIme" name="korIme" size="30" maxlength="20" placeholder="Korisničko ime"><br>
        <label for="lozinka">Lozinka: </label><br>
        <input type="password" id="lozinka" name="lozinka" size="30" maxlength="20" placeholder="Lozinka"><br>
        <label for="ponLozinka">Ponovi lozinku: </label><br>
        <input type="password" id="ponLozinka" name="ponLozinka" size="30" maxlength="20" placeholder="Ponovi lozinku"><br>
        <label for="grad">Grad: </label><br>
        <input type="text" id="grad" name="grad" size="30" maxlength="50" placeholder="Grad"><br>
        <label for="tel">Telefon: </label><br>
        <input type="text" id="tel" name="tel" size="30" maxlength="15" placeholder="Telefon"><br>
        <label for="uvjeti">Uvjeti: </label>
        <input type="checkbox" id="uvjeti" name="uvjeti"><br>
        <div class="g-recaptcha" data-sitekey="6LfnvRcbAAAAAL5zLWDr1GRY7cZgv6V2U3pIIzxq"></div>
        <br>
        <input id="submitRegistracija" type="submit" value=" Registracija ">
</form>