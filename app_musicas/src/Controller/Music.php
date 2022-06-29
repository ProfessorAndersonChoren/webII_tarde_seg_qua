<?php

namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Music;
use APP\Model\Composer;
use APP\Model\Record;
use APP\Model\MusicGender;

// Criação dos objetos
$composer_one = new Composer("Nirvana", 35, "99999-9999");
$record_one = new Record(
    name:"Virgin Records",
    phone:"88888-8888"
);
$music_one = new Music(
    yearOfRelease:1991,
    musicGender: MusicGender::ROCK,
    composer: $composer_one,
    record:$record_one,
    duration:120,
    album: "Nevermind",
    title: "Come as You Are"
);
echo "<pre>";
var_dump($music_one);
echo "</pre>";
