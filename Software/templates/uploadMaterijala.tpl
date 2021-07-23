<form id="materijali" method="post" name="materijali" action="" style="display: flex; justify-content: center;" enctype="multipart/form-data">
    <p><label for="rezervacija">Odabir rezervacije: </label><br>
        <select id="rezervacija" name="rezervacija">
        </select><br>
        <label for="vrsta">Odabir vrste materijala: </label><br>
        <select id="vrsta" name="vrsta">
            <option value="Audio">Audio (.mp3)</option>
            <option value="Video">Video (.mp4)</option>
            <option value="Slika">Slika (.jpg)</option>
        </select><br>
        <label for="materijal">Prijenos datoteke: </label><br>
        <input type="file" name="materijal" id="materijal"><br>
        <label for="suglasnost">Suglasnost: </label>
        <input type="checkbox" id="suglasnost" name="suglasnost"><br>
        <input id="submitMaterijal" name="submitMaterijal" type="submit" value=" Upload ">
</form>