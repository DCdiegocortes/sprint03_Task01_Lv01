<?php
declare(strict_types=1);

class Event
{
    private string $eventName;
    private DateTimeImmutable $date;

    public function __construct(string $eventName, DateTimeImmutable $date)
    {
        $this->inputValidation($eventName);
        $this->eventName = $eventName;
        $this->date = $date;
    }

    public function getEventName(): string
    {
        return $this->eventName;
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    private function inputValidation(string $eventName): void
    {
        if (empty($eventName)) {
            throw new InvalidArgumentException("value event: cannot be empty");
        }

    }


}
