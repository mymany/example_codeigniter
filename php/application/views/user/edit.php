<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User</title>
</head>
<body>
	<h1>User Edit</h1>
	<div id="container">
		<?php echo form_open('user/update'); ?>
			<label for="name">NAME</label>
			<input type="input" name="name" value=<?php echo $user->name ?> /><br />
			<label for="email">EMAIL</label>
			<input type="input" name="email" value=<?php echo $user->email ?> /><br />
			<input type="submit" name="submit" value="更新" />
	</div>

</body>
</html>