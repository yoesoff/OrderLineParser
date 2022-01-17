<?php
namespace App\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    protected static $defaultName = 'app:create-user';
    protected static $defaultDescription = 'Creates a new fake user.';

    public function __construct(bool $requirePassword = false)
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
        $this->requirePassword = $requirePassword;

        parent::__construct();
    }

    protected function configure(): void
    {
//        $this
//            ->setName('pdone:veeva:sync')
//            ->setDescription('Doing some tasks, whatever...');

        $this->setHelp('This command allows you to create a fake user...');

        $this->addArgument('username', InputArgument::REQUIRED);
        $this->addArgument('password', $this->requirePassword ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'User password');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('<bg=green;options=bold>Whoa!</>');

        // outputs a message without adding a "\n" at the end of the line
        $output->write('<info>You are about to </info>');
        $output->write("<info>create a user {$input->getArgument('username')} with password: {$input->getArgument('password')}</info>"  );

        return Command::SUCCESS;
    }
}