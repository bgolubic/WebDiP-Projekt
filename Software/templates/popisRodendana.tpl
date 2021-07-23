<div class="divTablica">
    <table class="tablica">
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>ID rođendana</th>
                <th>ID korisnika</th>
                <th>ID rezervacije</th>
                <th>Naziv rođendana</th>
                <th>Opis rođendana</th>
                <th>Datum rođendana</th>
                <th>Zamjenski termin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach $podaci as $podatak}
            <tr>
                <td class="id" value="{$podatak.rodendan_id}"><a href="obrasci/azuriranjeRodendana.php?id={$podatak.rodendan_id}" style="color: white;">{$podatak.rodendan_id}</a></td>
                <td>{$podatak.korisnici_id}</td>
                <td>{$podatak.rezervacija_id}</td>
                <td>{$podatak.rodendan_naziv}</td>
                <td>{$podatak.rodendan_opis}</td>
                <td>{$podatak.rezervacija_datumRodendana}</td>
                <td>{$podatak.rodendan_zamjenskiTermin}</td>
                <td><a href="obrasci/otkazRodendana.php?id={$podatak.rodendan_id}" style="color: white;"><button>Otkaži</button></a></td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</div>