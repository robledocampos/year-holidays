<?php

class SaoPauloCityHolidays extends SaoPauloStateHolidays {
	
  const COVERAGE = "são paulo";
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = self::COVERAGE;
    self::buildHolidays();
  }

  function buildHolidays() : void {
    $this->holidays["main"][] = $this->cityBirthday();
  }

  function cityBirthday() : array {
    return $this->buildHoliday(
      $this->year."-01-25",
      "city birthday"
    );
  }
}
