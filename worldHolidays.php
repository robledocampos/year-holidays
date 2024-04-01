<?php

class worldHolidays {
  protected string $year;
  protected array $holidays = [];
  
  function __construct(string $year) {
    $this->year = $year;
    $this->listWorldHolidays();
  }

	function listWorldHolidays() {
		$this->holidays["main"][] = $this->universalFraternization();
		$this->holidays["main"][] = $this->easter();
		$this->holidays["main"][] = $this->universalFraternization();
		$this->holidays["main"][] = $this->laborDay();
		$this->holidays["main"][] = $this->christmas();
	}

  function universalFraternization() {
  	return $this->year."-01-01";
  }

  function easter() {
	  return date(
		  "Y-m-d", 
		  easter_date(
			  $this->year()
		  )
	  );
  }
  
  function laborDay() {
  	return $this->year."-05-01";
  }

  function christmas() {
  	return $this->year."-12-25";
  }
}
