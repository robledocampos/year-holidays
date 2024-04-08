<?php

class saoPauloStateHolidaysModel extends brazilHolidaysModel {
	
  const COVERAGE = "SP";
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = self::COVERAGE;
    self::buildHolidays();
  }

  function buildHolidays() : void {
    $this->holidays["main"][] = $this->revolucaoConstitucionalista();
  }

  function revolucaoConstitucionalista() : array {
    return $this->buildHoliday(
     $this->year."-07-09",
     "revolucao constitucionalista"
    );
  }
}
