<?php

// Start adding your code here...
$response = (new \App\Services\View)->render('index');

die($response);
