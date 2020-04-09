<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('test1.php');

echo 'this world is funny';
echo '<BR>';

include_once('.\MessageFlags.class.php');
echo '<BR>';

$f = new MessageFlags(['Display', 'Text', 'Database', 'Email']);

echo '<pre>';
print_r($f);
echo '</pre>';


//
//$f->setFlag('database');
//$f->setFlag('email');
//
//$x = $f->getFlagsAsInt();
//echo '<pre>';
//print_r($x);
//echo '</pre>';
//echo '-------------------------------------<br>';
//
//
////$y = $f->getConstList(true);
////$y = $f->flagList;
//$y = $f->listOfFlag();
//echo '<pre>';
//print_r($x);
//print_r($y);
////print_r($z);
//echo '-------------zzzzzz------------------------<br>';
//
//$z = $f->setIntToFlags(9);
//print_r($f);
//$z = $f->getFlagsAsInt();
//print_r ($z);
//echo '</pre>';
//echo '<BR>';
//echo '<BR>';
//echo '<BR>';
