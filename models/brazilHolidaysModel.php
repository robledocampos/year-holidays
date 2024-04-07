<?php

class brazilHolidaysModel extends worldHolidaysModel {

  const COVERAGE = "brazil";
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = self::COVERAGE;
    self::buildHolidays();
  }

  function buildHolidays() : void {
    $this->holidays["main"][] = $this->carnaval();
    $this->holidays["main"][] = $this->paixao();
    $this->holidays["main"][] = $this->tiradentes();
    $this->holidays["main"][] = $this->corpusChristi();
    $this->holidays["main"][] = $this->independencia();
    $this->holidays["main"][] = $this->aparecida();
    $this->holidays["main"][] = $this->finados();
    $this->holidays["main"][] = $this->proclamacaoDaRepublica();
    $this->holidays["main"][] = $this->conscienciaNegra();
    ksort($this->holidays["main"]);
  }

  function carnaval() : array {
    $date = date_sub(
      date_create($this->easter), date_interval_create_from_date_string('47 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "carnaval");
  }

  function paixao() : array {
    $date = date_sub(
      date_create($this->easter), date_interval_create_from_date_string('2 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "sexta-feira da paixão");
  }

  function tiradentes() : array {
    return $this->buildHoliday($this->year."-04-21", "tiradentes");
  }

  function corpusChristi() : array {
    $date = date_add(
      date_create($this->easter), date_interval_create_from_date_string('60 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "corpus christi");
  }

  function independencia() : array {
    return $this->buildHoliday($this->year."-09-07", "independência");
  }

  function aparecida() : array {
    return $this->buildHoliday($this->year."-10-12", "nossa senhora aparecida");
  }

  function finados() : array {
    return $this->buildHoliday($this->year."-11-02", "finados");
  }

  function proclamacaoDaRepublica() : array {
    return $this->buildHoliday($this->year."-11-15", "proclamação da república");
  }

  function conscienciaNegra() : array {
    return $this->buildHoliday($this->year."-11-20", "consciência negra");
  }
}
