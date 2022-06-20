<?php
enum MusicGender{
    case ROCK;
    case COUNTRY;
    case REGGAE;
    case CLASSIC;

    public function toString()
    {
        return $this->name;
    }
}