<?php

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class GetRandomMoviesCommandTest extends TestCase {
    public function testExecute(): void
    {
        $application = new Application();
        $application->add(new \App\Command\GetRandomMoviesCommand());

        $command = $application->find('app:random');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $commandTester->assertCommandIsSuccessful();

        $output = $commandTester->getDisplay();

        $this->assertStringContainsString('Random movies:', $output);
        $this->assertStringContainsString('Enjoy your movies!', $output);
    }
}