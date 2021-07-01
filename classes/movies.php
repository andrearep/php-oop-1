<?php
class Movie
    {
        public $title;
        public $year;
        public $director;
        public $genre;
        public $original_lang;

        function __construct(string $title, int $year, string $director, string $genre, string $original_lang)
        {
            $this->title =$title;
            $this->year =$year;
            $this->director =$director;
            $this->genre =$genre;
            $this->original_lang =$original_lang;
        }
    }
?>