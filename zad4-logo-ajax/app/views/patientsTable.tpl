<table id="tab_people" width=400>
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td align=center>{$p["name"]}</td>
		<td align=center>{$p["surname"]}</td>
		<td align=center>{$p["date_of_birth"]}</td>
	<!-- <td align=center><a class="button-large" href="{$conf->action_url}personDelete/{$p['id_user1']}">Usuń</a></td> -->
	</tr>
{/strip}
{/foreach}
</tbody>
</table>