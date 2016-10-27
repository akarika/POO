<?php
require "Form.php";


$form = new Form($_POST);


?>
<form action="#" method="post">
    <?php
    echo $form->input('username');

    echo $form->input('password');
    echo $form->submit();

$test=$for??"non";
var_dump($test);
    ?>

</form>
