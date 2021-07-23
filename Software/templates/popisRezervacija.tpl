<div id="greska" style="color:red">
    {$neuspjeh}
</div>
<div class="divTablica">
    <table class="tablica">
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>ID rezervacije</th>
                <th>ID grupe</th>
                <th>ID korisnika</th>
                <th>Datum rođendana</th>
                <th>Vrijeme rođendana</th>
                <th>Broj djece</th>
                <th>Sudionici</th>
                <th>Uputa</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {if !empty($podaci)}
            {foreach $podaci as $podatak}
            <tr>
                <td>{$podatak.rezervacija_id}</td>
                <td>{$podatak.grupa_id}</td>
                <td>{$podatak.korisnici_id}</td>
                <td class="datum">{$podatak.rezervacija_datumRodendana}</td>
                <td>{$podatak.rezervacija_vrijemeRodendana}</td>
                <td>{$podatak.rezervacija_brojDjece}</td>
                <td>{$podatak.rezervacija_sudionici}</td>
                <td>{$podatak.rezervacija_uputa}</td>
                <td>{$podatak.rezervacija_status}</td>
                <td><a href="potvrdaRezervacije.php?id={$podatak.rezervacija_id}" style="color: white;"><button>Potvrdi</button></a></td>
                <td><a href="odbijanjeRezervacije.php?id={$podatak.rezervacija_id}" style="color: white;"><button>Odbij</button></a></td>
            </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
</div>
<script>
    elementi = document.getElementsByClassName("datum");
    for(i = 0; i < elementi.length; i++){
        for(j = 0; j < i; j++){
            if(elementi[i].innerHTML === elementi[j].innerHTML){
                elementi[i].style.backgroundColor = "red";
                elementi[j].style.backgroundColor = "red";
            }
        }
    }
</script>