<?php
include_once "Dancer.php";

$female = new SqlQueue();
$male = new SqlQueue();

$female->enqueue();
$female->enqueue();
$female->enqueue();
$female->enqueue();
$male->enqueue();
$male->enqueue();
$male->enqueue();
$male->enqueue();

