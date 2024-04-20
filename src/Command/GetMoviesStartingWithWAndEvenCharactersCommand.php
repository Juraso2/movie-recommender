<?php

namespace App\Command;

use App\MovieRecommender;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:starting-with-w',
    description: 'Get movies starting with W letter and even characters in title',
)]
class GetMoviesStartingWithWAndEvenCharactersCommand extends Command
{
    private MovieRecommender $movieRecommender;

    public function __construct()
    {
        require __DIR__ . '/../movies.php';

        $this->movieRecommender = new MovieRecommender($movies);

        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $movies = $this->movieRecommender->getMoviesStartingWithWLetterAndEvenCharactersInTitle();

        $io = new SymfonyStyle($input, $output);
        $io->title('Movies starting with W letter and even characters in title:');
        $io->listing($movies);
        $io->success('Enjoy your movies!');

        return Command::SUCCESS;
    }
}
