<?php

class worldHolidays {
  string $year; 
  
  function __construct(string $year) {
    $this->year = $year; 
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
