Vrijeme servera: {$ispisVrijemeServera}<br>
Vrijeme sustava: {$ispisVrijemeSustava}<br><br><br>

<form name="postavke" id="postavke" method="post" action="">
    <fieldset>
        <legend><a target="_blank" href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html" style="color: white;">Postavi virtualno vrijeme</a></legend>
        <label for="nacin">Odaberi način spremanja:</label><br>
        <input type="radio" name="nacin" value="json" checked />JSON<br>
        <input type="radio" name="nacin" value="xml" />XML<br>
    </fieldset>
    <input type="submit" name="postavke" value=" Postavi ">
</form>