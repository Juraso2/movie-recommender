<?php

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class GetMoviesWithMultipleWordsCommandTest extends TestCase {
    public function testExecute(): void
    {
        $application = new Application();
        $application->add(new \App\Command\GetMoviesWithMultipleWordsCommand());

        $command = $application->find('app:multi-words');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $commandTester->assertCommandIsSuccessful();

        $output = $commandTester->getDisplay();

        $this->assertStringContainsString('Movies with multiple words:', $output);
        $this->assertStringContainsString('Pulp Fiction', $output);
        $this->assertStringContainsString('Wielki Gatsby', $output);
        $this->assertStringContainsString('Królowa śniegu', $output);
        $this->assertStringContainsString('Enjoy your movies!', $output);
    }
}