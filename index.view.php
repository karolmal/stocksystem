<?php

require 'index.php';
require 'classes/stockroom.php';

var_dump($knife);

$sql = "INSERT INTO product (title, type, price) 
VALUES (\"{$knife->Title}\", \"{$knife->Type}\", {$knife->Price})";


if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

