<?php
//php index.php
//php -S localhost:8000 (to run in web browser)

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('The sky is blue, and grass is green !!!');