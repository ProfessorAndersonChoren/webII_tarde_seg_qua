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

    public function __construct(
        string $title,
        int $duration,
        MusicGender $musicGender,
        int $yearOfRelease,
        string $album,
        Composer $composer,
        Record $record
    )
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->musicGender = $musicGender;
        $this->yearOfRelease = $yearOfRelease;
        $this->album = $album;
        $this->composer = $composer;
        $this->record = $record;
    }
}