<?php

namespace App\Command;

use App\MovieRecommender;
use App\MovieRecommenderInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:random',
    description: 'Get random movies',
)]
class GetRandomMoviesCommand extends Command
{
    private MovieRecommenderInterface $movieRecommender;

    public function __construct()
    {
        require __DIR__ . '/../movies.php';

        $this->movieRecommender = new MovieRecommender($movies);

        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $movies = $this->movieRecommender->getRandomMovies();

        $io = new SymfonyStyle($input, $output);
        $io->title('Random movies:');
        $io->listing($movies);
        $io->success('Enjoy your movies!');

        return Command::SUCCESS;
    }
}
