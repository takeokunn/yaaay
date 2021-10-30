<?php
declare(strict_types=1);

namespace Yaaay\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class TestCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'test';

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this->setDescription('test description');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('This is test command!');
        return Command::SUCCESS;
    }
}
