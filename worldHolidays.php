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
    return $this->year."-01-01";
  }

  function easter() {
    return date("Y-m-d", easter_date($this->year));
  }
  
  function laborDay() {
    return $this->year."-05-01";
  }

  function christmas() {
    return $this->year."-12-25";
  }
}
