<?php
namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Music;
use APP\Model\Composer;
use APP\Model\Record;
use APP\Model\MusicGender;

// Criação dos objetos
$music_one = new Music();
$composer_one = new Composer();
$record_one = new Record();

$music_one->album = "Nevermind";
$music_one->composer = $composer_one;
$music_one->duration = 120;
$music_one->musicGender = MusicGender::ROCK;
$music_one->record = $record_one;
$music_one->title = "Come as Your Are";
$music_one->yearOfRelease = 1991;

echo "<pre>";
var_dump($music_one);
echo "</pre>";