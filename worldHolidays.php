<?php

class worldHolidays {

  public string $year;
  public array $holidays = [];
  
  function __construct(string $year) {
    $this->year = $year;
    $this->buildWorldHolidays();
  }

  function stringToDate(string $stringDate) {
    return date("Y-d-m", strtotime($stringDate));
  }

  function buildWorldHolidays() {
    $this->holidays["main"][] = $this->universalFraternization();
    $this->holidays["main"][] = $this->easter();
    $this->holidays["main"][] = $this->universalFraternization();
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
