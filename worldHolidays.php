<?php

class worldHolidays {

  public string $year;
  public array $holidays = [];
  
  function __construct(string $year) {
    $this->year = $year;
    $this->buildWorldHolidays();
  }
  
  function weekDay(string $date) {
    $weekDays = [];
    $weekDays[0] = "sunday";
    $weekDays[1] = "monday";
    $weekDays[2] = "tuesday";
    $weekDays[3] = "wednesday";
    $weekDays[4] = "thursday";
    $weekDays[5] = "friday";
    $weekDays[6] = "saturday";
    $index = date("w", strtotime($date));
    return $weekDays[$index];
  }

  function buildWorldHolidays() {
    $this->holidays["main"][] = $this->universalFraternization();
    $this->holidays["main"][] = $this->easter();
    $this->holidays["main"][] = $this->laborDay();
    $this->holidays["main"][] = $this->christmas();
  }

  function universalFraternization() {
    $date = $this->year."-01-01";
    return $this->stringToDate($date);
  }

  function easter() {
    return date("Y-m-d", easter_date($this->year));
  }
  
  function laborDay() {
    $date = $this->year."-05-01";
    return $this->stringToDate($date);  
  }

  function christmas() {
    $date = $this->year."-12-25";
    return $this->stringToDate($date);  
  }
}
