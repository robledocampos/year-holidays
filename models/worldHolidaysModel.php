<?php

class worldHolidaysModel extends baseHolidaysModel {

  public array $universalFraternization;
  public array $easter;
  public array $laborDay;
  public array $christmas;
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = "world";
    $this->universalFraternization = $this->universalFraternization();
    $this->easter = $this->easter();
    $this->laborDay = $this->laborDay();
    $this->christmas = $this->christmas();
    $this->buildWorldHolidays();
  }
  
  function universalFraternization() : array {
    return $this->buildHoliday($this->year."-01-01", "universal fraternization");
  }
  
  function easter() : array {
    return $this->buildHoliday(date("Y-m-d", easter_date($this->year)), "easter");
  }
  
  function laborDay() : array {
    return $this->buildHoliday($this->year."-05-01", "labor day");
  }

  function christmas() : array {
    return $this->buildHoliday($this->year."-12-25", "christmas");
  }

  function buildWorldHolidays() {
    $dates[$this->universalFraternization["date"]] = $this->universalFraternization;
    $dates[$this->easter["date"]] = $this->easter;
    $dates[$this->laborDay["date"]] = $this->laborDay;
    $dates[$this->christmas["date"]] = $this->christmas;
    $this->holidays['main'] = $dates;
    ksort($this->holidays['main']);
  }
}