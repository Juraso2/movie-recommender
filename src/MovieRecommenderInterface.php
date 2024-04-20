<?php

namespace App;

interface MovieRecommenderInterface
{
    public function getRandomMovies(): array;

    public function getMoviesStartingWithWLetterAndEvenCharactersInTitle(): array;

    public function getMoviesWithMultipleWords(): array;
}
