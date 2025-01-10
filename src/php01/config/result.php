<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
print '私の名前は、' . $name . '<br />';

$set_name = htmlspecialchars($_POST['set_name'],ENT_QUOTES);
print 'ご希望の商品は、' . $set_name . '<br />';

$order = htmlspecialchars($_POST['order'],ENT_QUOTES);
print '注文数は、' . $order . '<br />';