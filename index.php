<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('test1.php');

echo 'this world is funny';

include_once('.\MessageFlags.class.php');

$f = new MessageFlags();
$x = $f->getFlags();
$y = $f->getConstList(true);
echo '<pre>';
print_r($x);
print_r($y);
echo '</pre>';
