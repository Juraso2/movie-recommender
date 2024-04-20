<?php

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class GetMoviesStartingWithWAndEvenCharactersCommandTest extends TestCase {
    public function testExecute(): void
    {
        $application = new Application();
        $application->add(new \App\Command\GetMoviesStartingWithWAndEvenCharactersCommand());

        $command = $application->find('app:starting-with-w');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $commandTester->assertCommandIsSuccessful();

        $output = $commandTester->getDisplay();

        $this->assertStringContainsString('Movies starting with W letter and even characters in title:', $output);
        $this->assertStringContainsString('Whiplash', $output);
        $this->assertStringContainsString('Wyspa tajemnic', $output);
        $this->assertStringContainsString('Władca Pierścieni: Drużyna Pierścienia', $output);
        $this->assertStringContainsString('Enjoy your movies!', $output);
    }
}