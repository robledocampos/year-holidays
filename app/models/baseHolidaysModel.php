<?php

class baseHolidaysModel {

  public const WEEKDAYS = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
  public string $coverage;
  public array $holidays;
  public string $year;

  function __construct(string $year = null) {
    $this->year = $year ?? date("Y");
  }

  function buildHoliday(string $date, string $holidayName) : array {
    return [
      $date => [
        "date" => $date,
        "name" => $holidayName,
        "weekday" => $this->weekDay($date),
        "coverage" => $this->coverage
      ]
    ];
  }

  function weekDay(string $date) : string {
    $index = date("w", strtotime($date));
    return $this::WEEKDAYS[$index];
  }

  function printHolidays() : string {
    ksort($this->holidays["main"]);
    return json_encode($this->holidays);
  }
}
