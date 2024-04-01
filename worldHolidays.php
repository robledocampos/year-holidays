<?php

class worldHolidays {

  public const WEEKDAYS = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
  public string $year;
  public array $holidays = [];
  
  function __construct(string $year) {
    $this->year = $year;
    $this->buildWorldHolidays();
  }
  
  function weekDay(string $date) {
    $index = date("w", strtotime($date));
    return $this::WEEKDAYS[$index];
  }

  function buildHoliday(string $date) {
    return [
      "date" => $date,
      "weekday" => $this->weekDay($date)
    ];
  }

  function buildWorldHolidays() {
    $dates[$this->universalFraternization()] = $this->buildHoliday($this->universalFraternization());
    $dates[$this->easter()] = $this->buildHoliday($this->easter());
    $dates[$this->laborDay()] = $this->buildHoliday($this->laborDay());
    $dates[$this->christmas()] = $this->buildHoliday($this->christmas());
    $this->holidays['main'] = $dates;
    ksort( $this->holidays['main']);
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
