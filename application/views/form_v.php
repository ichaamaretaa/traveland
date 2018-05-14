<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Form Input - User</title>
</head>
<body>
	<form method="post" action="<?php echo base_url()."index.php/user/do_insert"; ?>" >
		ID<br/>
		<input type="text" name="id_user"/><br/>
		Username<br/>
		<input type="text" name="username"/><br/>
		Password<br/>
		<input type="password" name="password"/><br/>
		Fullname<br/>
		<input type="text" name="fullname" /><br/>
		Level<br/>
		<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select><br/>
		<input type="submit" value="simpan"/>
	</form>
</body>
</html>