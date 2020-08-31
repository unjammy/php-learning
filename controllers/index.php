<?php

$questlog = $query->selectAll('questlog');
// var_dump($questlog);

require 'views/index.template.php';