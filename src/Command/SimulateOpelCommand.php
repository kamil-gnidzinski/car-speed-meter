<?php

namespace App\Command;

use App\Service\Car\SpeedMeter\CarSpeedMeter;
use App\Service\Simulator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SimulateOpelCommand extends Command
{
    protected static $defaultName = 'app:simulate-opel';
    private $simulator;

    /**
     * SimulateOpelCommand constructor.
     */
    public function __construct(Simulator $simulator)
    {
        parent::__construct();
        $this->simulator = $simulator;;
    }

    protected function configure()
    {
        $this
            ->setDescription('Simulate speed meter for Opel');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->simulator->simulateOpel();
        return 0;
    }
}
