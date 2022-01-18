<?php

namespace App\Command;

use App\DTO\Customer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\DTO\Order;

class ProcessOrderCommand extends Command
{
    private $order;

    protected static $defaultName = 'app:process-order';
    protected static $defaultDescription = 'Process remote orders from remote jsonl file.';

    private static $url = "https://s3-ap-southeast-2.amazonaws.com/catch-code-challenge/challenge-1-in.jsonl";

    private $orders = array();

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setHelp('Process Order jsonl file from remote AWS');

        $this->addArgument('email', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'Process Orders',
            '==============',
        ]);

        $orders = file(self::$url);
        foreach ($orders as $num => $order) {
            $this->orders[$num] = json_decode($order, true);

            $tOrder = $this->orders[$num];
            $customer = new Customer("22", "asda", "asdasd", "asdasd", "asdasd", "asdasd");
            $order = new Order($tOrder["order_id"], $tOrder["order_date"], $customer, $tOrder["items"], $tOrder["discounts"], $tOrder["shipping_price"]);

            if (count($tOrder['items'])) {
                $output->writeln($order->getOrderId());
            } else {
                $output->writeln("Empty");
            }
        }
        // demo

        // outputs a message followed by a "\n"
        $output->writeln('<bg=green;options=bold>Whoa!</>');

        return Command::SUCCESS;
    }
}