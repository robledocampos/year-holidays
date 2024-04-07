<?php

class worldHolidaysModel extends baseHolidaysModel {

  const COVERAGE = "wolrd";
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = self::COVERAGE;
    self::buildHolidays();
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

  function buildHolidays() : void {
    $this->holidays['main'][] = $this->universalFraternization();
    $this->holidays['main'][] = $this->easter();
    $this->holidays['main'][] = $this->laborDay();
    $this->holidays['main'][] = $this->christmas();
    ksort($this->holidays['main']);
  }
}
