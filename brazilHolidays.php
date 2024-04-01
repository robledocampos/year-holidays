<?php

class brazilHolidays extends worldHolidays {
  
  function __construct(string $year) {
    parent::__construct($year);
    $this->listBrazilHolidays();
  }

  function listBrazilHolidays() {
    $this->holidays["main"][] = $this->carnaval();
    $this->holidays["main"][] = $this->paixao();
	  $this->holidays["main"][] = $this->tiraDentes();
	  $this->holidays["main"][] = $this->corpusChristi();
	  $this->holidays["main"][] = $this->finados();
	  $this->holidays["main"][] = $this->proclamacaoDaRepublica();
  }

  function carnaval() {
	  $carnaval = date_sub(
	    date_create($this->easter()), date_interval_create_from_date_string('47 days')
	  );
	  return date_format($carnaval, 'Y-m-d');
  }

  function paixao() {
	  $friday = date_sub(
      date_create($this->easter()), date_interval_create_from_date_string('2 days')
	  );
	  return date_format($friday, 'Y-m-d');
  }

  function tiraDentes() {
  	return $this->year."-04-21";
  }

  function corpusChristi() {
	$corpusChristi = date_add(
		date_create($this->easter()), date_interval_create_from_date_string('60 days')
  	);
  	return date_format($corpusChristi, 'Y-m-d');
  }

  function finados() {
  	return $this->year."-11-02";
  }

  function proclamacaoDaRepublica() {
  	return $this->year."-11-15";
  }
}
