<?php
$items = [];
$items[] = [
    'name' => 'book',
    'quantity' => '2',
    'price' => '200',
    'description' => 'yellow',
    'category' => 'stationary',
];
$items[] = [
    'name' => 'biro',
    'quantity' => '12',
    'price' => '500',
    'description' => 'blue',
    'category' => 'stationary',
];
$items[] = [
    'name' => 'laptop',
    'quantity' => '2',
    'price' => '90000',
    'description' => 'black and white',
    'category' => 'electronics',
];
$items[] = [
    'name' => 'phone',
    'quantity' => '2',
    'price' => '50000',
    'description' => 'red',
    'category' => 'electronics',
];
$items[] = [
    'name' => 'television',
    'quantity' => '1',
    'price' => '30000',
    'description' => 'gray',
    'category' => 'electrinics',
];
$items[] = [
    'name' => 'fan',
    'quantity' => '2',
    'price' => '7000',
    'description' => 'black',
    'category' => 'electronics',
];
$items[] = [
    'name' => 'meat',
    'quantity' => '2',
    'price' => '200',
    'description' => 'yellow',
    'category' => 'food',
];
$items[] = [
    'name' => 'vegetables',
    'quantity' => '2',
    'price' => '200',
    'description' => 'green',
    'category' => 'food',
];
$items[] = [
    'name' => 'bread',
    'quantity' => '2',
    'price' => '200',
    'description' => 'brown',
    'category' => 'food',
];
$items[] = [
    'name' => 'egg',
    'quantity' => '30',
    'price' => '1000',
    'description' => 'yellow',
    'category' => 'food',
];
foreach($items as $items){
    echo 'item name is '.$items['name'].'<br>';
    echo 'item category is '.$items['category'].'<br>';
    echo 'item quantity is '.$items['quantity'].'<br>';
    echo 'item price is # '.$items['price'].'<br>';
    echo 'item description is '.$items['description'].'<br>
    <input type="submit" value="buy">
    <br><br>';
}
