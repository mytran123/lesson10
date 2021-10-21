<?php
include_once "Dancer.php";

$girls = new SplQueue();
$boys = new SplQueue();

$girls->enqueue(new Dancer("Hoa","female"));
$girls->enqueue(new Dancer("Phượng","female"));
$girls->enqueue(new Dancer("Mai","female"));
$girls->enqueue(new Dancer("Lan","female"));

$boys->enqueue(new Dancer("Tài","male"));
$boys->enqueue(new Dancer("Tuấn","male"));
$boys->enqueue(new Dancer("Tú","male"));

$partner = [];
$female_wait = [];
$male_wait = [];

while (!$girls->isEmpty() || !$boys->isEmpty()) {
    if (!$girls->isEmpty() && !$boys->isEmpty()) {
        $partner[] = $girls->dequeue()->name . " & " . $boys->dequeue()->name;
    } else if (!$girls->isEmpty() && $boys->isEmpty()) {
        $female_wait[] = $girls->dequeue()->name;
    } else if ($girls->isEmpty() && !$boys->isEmpty()) {
        $male_wait[] = $boys->dequeue()->name;
    }
}

echo "<pre>";
echo "Cặp đôi: ";
print_r($partner);
echo "<br>";
echo "Hàng đợi nữ: ";
print_r($female_wait);
echo "<br>";
echo "Hàng đợi nam: ";
print_r($male_wait);