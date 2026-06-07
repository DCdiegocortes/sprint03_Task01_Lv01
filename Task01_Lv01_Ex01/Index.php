<?php
declare(strict_types=1);

require_once "OlympicGames.php";
require_once "Athlete.php";
require_once "Event.php";
require_once "Result.php";

$athlete1 = new Athlete("Usain Bolt","Jamaica" );
$athlete2 = new Athlete("Michael Phelps", "USA");

$eventsData1 = new Event("100m Sprint", new DateTimeImmutable("2024-08-01"));
$eventsData2 = new Event("Swimming", new DateTimeImmutable("2024-08-02"));

$resultsData1 = new Result($athlete1, $eventsData1,Medal::GOLD);
$resultsData2 = new Result($athlete2, $eventsData2, Medal::GOLD);

$olympics = new OlympicGames();
$olympics->addAthlete($athlete1);
$olympics->addAthlete($athlete2);
$olympics->addEvent($eventsData1);
$olympics->addEvent($eventsData2);

$olympics->addResult($resultsData1);
$olympics->addResult($resultsData2);

echo $olympics->olympicPrinter();


