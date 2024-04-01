<?php

class brazilHolidays extends worldHolidays {
  
  function __construct(string $year) {
    parent::__construct($year);
    $this->buildBrazilHolidays();
  }

  function buildBrazilHolidays() {
  	$dates[$this->carnaval()] = $this->buildHoliday($this->carnaval());
  	$dates[$this->paixao()] = $this->buildHoliday($this->paixao());
  	$dates[$this->tiraDentes()] = $this->buildHoliday($this->tiraDentes());
  	$dates[$this->corpusChristi()] = $this->buildHoliday($this->corpusChristi());
  	$dates[$this->finados()] = $this->buildHoliday($this->finados());
  	$dates[$this->proclamacaoDaRepublica()] = $this->buildHoliday($this->proclamacaoDaRepublica());
  	$this->holidays["main"] = array_merge($this->holidays["main"], $dates);
  	ksort($this->holidays["main"]);
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
