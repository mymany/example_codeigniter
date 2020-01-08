<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Index</title>
</head>
<body>

<div id="container">
	<h1>User Index</h1>
	<div id="body">
		<?php echo anchor('user/new', '会員登録')?>
		<div class="user_list">
			<?php foreach ($users as $user):?>
				<li>id: <?php echo $user->id;?> : <?php echo $user->name;?> -> <?php echo $user->email;?></li>
			<?php endforeach;?>
		</div>
	</div>

</div>

</body>
</html>