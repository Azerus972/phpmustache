<?php

require 'vendor/autoload.php';



$m = new Mustache_Engine([

'loader'=>new Mustache_Loader_FilesystemLoader

]);

echo $m->render('Hi {{name}}', [

    'name' => 'World'

]);




?>