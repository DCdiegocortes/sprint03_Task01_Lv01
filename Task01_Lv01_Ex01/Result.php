<?php

declare(strict_types=1);
require_once "Medal.php";
require_once "Athlete.php";
require_once "Event.php";

class Result
{
    private Athlete $athlete;
    private Event $event;
    private Medal $medal;

    public function __construct(Athlete $athlete, Event $event, Medal $medal)
    {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }

    public function getAthlete(): Athlete
    {
        return $this->athlete;
    }

    public function getEvent(): Event
    {
        return $this->event;
    }

    public function getMedal(): Medal
    {
        return $this->medal;
    }


}
