<?php

class worldHolidays {

  public const WEEKDAYS = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
  public string $coverage;
  public string $year;
  public array $universalFraternization;
  public array $easter;
  public array $laborDay;
  public array $christmas;
  public array $holidays = [];
  
  function __construct(string $year = null) {
    $year = !is_null($year) ?: date("Y");
    $this->year = $year;
    $this->coverage = "World";
    $this->universalFraternization = $this->universalFraternization();
    $this->easter = $this->easter();
    $this->laborDay = $this->laborDay();
    $this->christmas = $this->christmas();
    $this->buildWorldHolidays();
  }

  function universalFraternization() {
    return $this->buildHoliday($this->year."-01-01", "universal fraternization");
  }

  function easter() {
    return $this->buildHoliday(date("Y-m-d", easter_date($this->year)), "easter");
  }
  
  function laborDay() {
    return $this->buildHoliday($this->year."-05-01", "labor day");
  }

  function christmas() {
    return $this->buildHoliday($this->year."-12-25", "christmas");
  }

  function buildWorldHolidays() {
    $dates[$this->universalFraternization["date"]] = $this->universalFraternization;
    $dates[$this->easter["date"]] = $this->easter;
    $dates[$this->laborDay["date"]] = $this->laborDay;
    $dates[$this->christmas["date"]] = $this->christmas;
    $this->holidays['main'] = $dates;
    ksort( $this->holidays['main']);
  }

  function buildHoliday(string $date, string $holidayName) {
    return [
      "date" => $date,
      "name" => $holidayName,
      "weekday" => $this->weekDay($date),
      "coverage" => $this->coverage
    ];
  }
  
  function weekDay(string $date) {
    $index = date("w", strtotime($date));
    return $this::WEEKDAYS[$index];
  }
  
}

