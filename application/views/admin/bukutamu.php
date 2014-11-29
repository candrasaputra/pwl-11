<table>
	<tr>
		<th>#</th>
		<th>Nama</th>
		<th>isi</th>
		<th>Tanggal</th>
	</tr>
	<?php $no=1?>
	<?php foreach($bukutamu as $n):?>
	<tr>
		<td><?php echo $no?></td>
		<td><?php echo $n->nm_bt?></td>
		<td><?php echo $n->isi_bt?></td>
		<td><?php echo $n->tgl_bt?></td>
	</tr>	
	<?php $no++?>
	<?php endforeach?>
</table>