<?php

declare(strict_types=1);

namespace App\AppBundle\Command;

use App\Entity\WlasnCHEM;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use PHPUnit\Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use \DateTime;

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

    private LoggerInterface $logger;

    /**
     * @param EntityManagerInterface $entityManager
     * @param LoggerInterface $logger
     */
    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
        $this->logger = $logger;
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
     * @throws \League\Csv\InvalidArgument
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input,$output);
        $this->logger->info('Start importing CSV file');
        try {
            $filePath = '/tmp/mock_data.csv';
            $this->logger->info('Reading CSV from file ' . $filePath);
            $reader = Reader::createFromPath($filePath);
            $reader->setDelimiter(';');
            $lines = $reader->getRecords();
        } catch (Exception $exception){
            $this->logger->error('CSV Reader throw Exception ' .$exception->getMessage() );
            return 1;
        }
        $loopCounter = 0;
        foreach ($lines as $line) {
            $loopCounter++;
            if( (int) $line[0] === 0) {
                $this->logger->info('Skipping line with invalid ID');
                continue;
            }

        $this->logger->info('processing line ' . $loopCounter);
            $commaToDot = array_map(function ($item){
                return str_replace(',' , '.',$item);
            },$line);

            $floatLine = array_map(function($item){
                return floatval($item);
            },$commaToDot);


            $WlasnCHEM = (new WlasnCHEM())
                ->setNumerWytopu((int) $line[0])
                ->setDate(DateTime::createFromFormat('d-m-Y',$line[1]))
                ->setTime(DateTime::createFromFormat('H:i:s',$line[2]))
                ->setGatunek($line[3])
                ->setKoncowaProba($line[4])
                ->setValueC ($floatLine[5])
                ->setValueSi($floatLine[6])
                ->setValueMn($floatLine[7])
                ->setValueP($floatLine[8])
                ->setValS($floatLine[9])
                ->setValueCr($floatLine[10])
                ->setValueNi($floatLine[11])
                ->setValueMo($floatLine[12])
                ->setValueCu($floatLine[13])
                ->setValueAl($floatLine[14])
                ->setValueV($floatLine[15])
                ->setValueCe($floatLine[16])
                ->setValueSn($floatLine[17])
                ->setValueTi($floatLine[18])
                ;


            try{
                $this->logger->info('Persisting line ' . $loopCounter);
                $this->entityManager->persist($WlasnCHEM);
            } catch (Exception $exception){
                $this->logger->error('Line not persist');
            }

        }

        try {
            $this->logger->info('Flushing data');
            $this->entityManager->flush();
            $io->success('Command exited cleanly!');
        } catch (Exception $exception){
            $this->logger->error('Exception during flush ' . $exception->getMessage() );
        }

        return 0;
    }

}