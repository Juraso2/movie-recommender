<?php

namespace App;

class MovieRecommender implements MovieRecommenderInterface
{
    private array $movies;

    public function __construct(array $movies)
    {
        $this->movies = $movies;
    }

    public function getRandomMovies(): array
    {
        shuffle($this->movies);

        return array_slice($this->movies, 0, 3);
    }

    public function getMoviesStartingWithWLetterAndEvenCharactersInTitle(): array
    {
        return array_filter($this->movies, function ($movie) {
            return strpos($movie, 'W') === 0 && mb_strlen($movie) % 2 === 0;
        });
    }

    public function getMoviesWithMultipleWords(): array
    {
        return array_filter($this->movies, function ($movie) {
            return str_word_count($movie) > 1;
        });
    }
}
