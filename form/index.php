<?php

require 'Form.php';
require 'text.php';

$form = new Form($_POST);
var_dump(Text::withZero(4));
?>



<form action="#" method="post">
	<?php
	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit();
	?>
</form>
