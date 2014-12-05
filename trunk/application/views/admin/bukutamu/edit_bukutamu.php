<!DOCTYPE html>
<html>
<head>
	<title>Daftar Hadir Praktikum</title>
</head>
<body>
	
		<form action="<?php echo site_url('admin/bukutamu/proses_edit_bukutamu');?>" method="POST">
			<select name="stats">
				<option>publish</option>
				<option>draff</option>
			</select>
			<input type="hidden" name="id_bt" value="<?php echo $bukutamu->id_bt;?>" />
			<input type="submit" value="Ubah" />
		</form>
	
</body>
</html>