<?php

require 'Form.php';

$form = new Form(array("username" => "Roger"));

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
