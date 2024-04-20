<?php

namespace App\Command;

use App\MovieRecommenderInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:multi-words',
    description: 'Get movies with multiple words',
)]
class GetMoviesWithMultipleWordsCommand extends Command
{
    private MovieRecommenderInterface $movieRecommender;

    public function __construct()
    {
        require __DIR__ . '/../movies.php';

        $this->movieRecommender = new MovieRecommenderInterface($movies);

        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $movies = $this->movieRecommender->getMoviesWithMultipleWords();

        $io = new SymfonyStyle($input, $output);
        $io->title('Movies with multiple words:');
        $io->listing($movies);
        $io->success('Enjoy your movies!');

        return Command::SUCCESS;
    }
}
