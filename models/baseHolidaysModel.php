<?php

use JetBrains\PhpStorm\ArrayShape;

class baseHolidaysModel {

  public const WEEKDAYS = [
    "sunday", 
    "monday", 
    "tuesday", 
    "wednesday", 
    "thursday", 
    "friday", 
    "saturday"
  ];
  public string $coverage;
  public string $year;
  public array $holidays = [];
  
  function __construct(string $year = null) {
    $this->year = ($year == null) ? date("Y") : $year;
  }
  
  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function buildHoliday(string $date, string $holidayName) : array {
    return [
      "date" => $date,
      "name" => $holidayName,
      "weekday" => $this->weekDay($date),
      "coverage" => $this->coverage
    ];
  }
  
  function weekDay(string $date) : string {
    $index = date("w", strtotime($date));
    return $this::WEEKDAYS[$index];
  }

  function printHolidays() : string {
    return json_encode($this->holidays);
  }
}