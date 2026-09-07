<?php
declare(strict_types=1);

require_once "Athlete.php";
require_once "Result.php";
require_once "Event.php";

class OlympicGames
{
    private array $results = [];

    public function getResults(): array
    {
        return $this->results;
    }

    public function addResult(Result $result): void
    {
        $this->results [] = $result;
    }

    public function olympicPrinter(): string
    {
        $output = "Olympic games result: \n";
        $output .= "---------------------------------- \n";
        foreach ($this->results as $currentResult) {
            $output .= "Event: " . $currentResult->getEvent()->getEventName() . "\n";
            $output .= "Date time: " . $currentResult->getEvent()->getDate()->format('Y-m-d') . "\n"; // no se convierte a string AU
            $output .= "Athlete Name: " . $currentResult->getAthlete()->getName() . "\n";
            $output .= "Country: " . $currentResult->getAthlete()->getCountry() . "\n";
            $output .= "Type of Medal: " . $currentResult->getMedal()->name . "\n";
            $output .= "------------------------------- \n";
        }
        return $output;
    }

}
