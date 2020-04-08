<?php

require 'config/db.php';

// Create Query
$query = 'SELECT * FROM product';

//$query = 'SELECT id, title, type, price from product';

// Get Result( perform query on database)
$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result);
