<?php

use App\MovieRecommender;
use PHPUnit\Framework\TestCase;

class MovieRecommenderTest extends TestCase
{
    private array $movies;
    private MovieRecommender $movieRecommender;

    protected function setUp(): void
    {
        require __DIR__ . '/../src/movies.php';

        $this->movies = $movies;
        $this->movieRecommender = new MovieRecommender($this->movies);
    }

    public function testGetRandomMovies(): void
    {
        $movies = $this->movieRecommender->getRandomMovies();

        $this->assertCount(3, $movies);
        $this->assertContains($movies[0], $this->movies);
        $this->assertContains($movies[1], $this->movies);
        $this->assertContains($movies[2], $this->movies);
    }

    public function testGetMoviesStartingWithWLetterAndEvenCharactersInTitle(): void
    {
        $movies = $this->movieRecommender->getMoviesStartingWithWLetterAndEvenCharactersInTitle();

        $this->assertContains('Whiplash', $movies);
        $this->assertContains('Wyspa tajemnic', $movies);
        $this->assertContains('Władca Pierścieni: Drużyna Pierścienia', $movies);
        $this->assertNotContains('Pulp Fiction', $movies);
        $this->assertNotContains('Wielki Gatsby', $movies);
        $this->assertNotContains('Władca Pierścieni: Dwie wieże', $movies);
    }

    public function testGetMoviesWithMultipleWords(): void
    {
        $movies = $this->movieRecommender->getMoviesWithMultipleWords();

        $this->assertContains('Pulp Fiction', $movies);
        $this->assertContains('Władca Pierścieni: Powrót króla', $movies);
        $this->assertContains('Królowa śniegu', $movies);
        $this->assertNotContains('Incepcja', $movies);
        $this->assertNotContains('Matrix', $movies);
    }
}
