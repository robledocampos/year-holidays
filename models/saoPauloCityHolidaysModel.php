<?php

class saoPauloCityHolidaysModel extends saoPauloStateHolidaysModel {
	
  const COVERAGE = "são paulo";
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = self::COVERAGE;
    self::buildHolidays();
  }

  function buildHolidays() : void {
    $this->holidays["main"][] = $this->cityBirthday();
    ksort($this->holidays["main"]);
  }

  function cityBirthday() : array {
    return $this->buildHoliday($this->year."-01-25", "city birthday");
  }
}
