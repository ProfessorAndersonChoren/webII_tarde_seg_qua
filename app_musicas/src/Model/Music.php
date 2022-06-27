<?php
namespace APP\Model;
class Music{
    public string $title;
    public int $duration;
    public MusicGender $musicGender;
    public int $yearOfRelease;
    public string $album;
    public Composer $composer;
    public Record $record;
}