<?php
require '../vendor/autoload.php';
use Rych\Random\Random;
echo "Random Integer: " . ( new Random())->getRandomInteger(1, 100);