<?php

declare(strict_types=1);

namespace App\AppBundle\Command;
use App\Entity\WlasnCHEM;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * class CsvImportCommand
 * @package AppBundle\ConsoleCommand
 */
class CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
    }

    /**
     * @return int
     */
    protected function configure() : int
    {
        $this
            ->setName('csv:import')
            ->setDescription('Imports the CSV data file');
        return 0;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input,$output);

        $WlasnCHEM = (new WlasnCHEM())
            ->setDate(new \DateTime)
            ->setTime(new \DateTime())
            ->setGatunek('elo')
            ->setKoncowaProba('ewrwer')
            ->setNumerWytopu(12345);


        $this->entityManager->persist($WlasnCHEM);

        $this->entityManager->flush();

        $io->success('Command exited cleanly!');
        return $io->getVerbosity();
    }

}