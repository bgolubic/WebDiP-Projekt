<div class="divTablica">
    <table>
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>Naziv grupe</th>
                <th>Broj rođendana</th>
            </tr>
        </thead>
        <tbody>
            {if !empty($podaci)}
            {foreach $podaci as $podatak}
            <tr>
                <td>{$podatak.grupa_naziv}</td>
                <td>{$podatak.grupa_brojRodendana}</td>
            </tr>
            {/foreach}
            {/if}
        </tbody>
    </table>
</div>