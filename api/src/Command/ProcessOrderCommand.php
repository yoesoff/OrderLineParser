<?php

namespace App\Command;

use App\DTO\Customer;
use App\Service\OrderService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\DTO\Order;

class ProcessOrderCommand extends Command
{
    private OrderService $orderService;
    private Order $order;

    protected static $defaultName = 'app:process-order';
    protected static $defaultDescription = 'Process remote orders from remote jsonl file.';

    private static $url = "https://s3-ap-southeast-2.amazonaws.com/catch-code-challenge/challenge-1-in.jsonl";

    public function __construct(OrderService $o)
    {
        parent::__construct();
        $this->orderService = $o;
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
            $tOrder = json_decode($order, true);

            $order = $this->orderService->buildOrder($tOrder);

            if (count($tOrder['items'])) {
//                $output->writeln(var_dump($tOrder));
                $output->writeln(var_dump($order->getCustomer()->getShippingAddress()));
            } else {
                $output->writeln("<bg=red;options=bold>Empty Items</>");
            }
        }
        // demo

        // outputs a message followed by a "\n"
        $output->writeln('<bg=green;options=bold>Done!</>');

        return Command::SUCCESS;
    }
}