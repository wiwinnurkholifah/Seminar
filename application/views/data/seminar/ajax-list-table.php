<?php 
	if ($data_seminar['count'] > 0) {
		$no = 0 + $offset;
		foreach ($data_seminar['object'] as $seminar) {
			$no++;
?>
<tr>

	<td><?=$seminar->id?></td>
	<td><?=$seminar->nama?></td>
	<td><?=$seminar->jenis_kelamin?></td>
	<td><?=$seminar->instansi?></td>
	<td><?=$seminar->no_hp?></td>
	<td><?=$seminar->email?></td>

	<td>
		<a href="#" class="edit-data text-primary" data-id="<?=$seminar->id?>">
			<i class="material-icons">edit</i>
		</a>
		<a href="#" class="hapus-data text-danger" data-id="<?=$seminar->id?>">
			<i class="material-icons">delete</i>
		</a>
	</td>
</tr>
<?php
		}
	}
?>