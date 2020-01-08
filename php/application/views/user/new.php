<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User New</title>
</head>
<body>
	<h1>User New</h1>
	<div id="container">
		<?php echo form_open('user/create'); ?>
			<label for="name">NAME</label>
			<input type="input" name="name" /><br />
			<label for="email">EMAIL</label>
			<input type="input" name="email" /><br />
			<input type="submit" name="submit" value="Create User" />
	</div>

</body>
</html>