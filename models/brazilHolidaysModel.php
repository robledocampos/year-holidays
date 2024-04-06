<?php

use JetBrains\PhpStorm\ArrayShape;

class brazilHolidaysModel extends worldHolidaysModel {
	
  public array $carnaval;
  public array $paixao;
  public array $tiradentes;
  public array $corpusChristi;
  public array $independencia;
  public array $aparecida;
  public array $finados;
  public array $proclamacaoDaRepublica;
  public array $conscienciaNegra;
  
  function __construct(string $year = null) {
    parent::__construct($year);
    $this->coverage = "brazil";
    $this->carnaval = $this->carnaval();
    $this->paixao = $this->paixao();
    $this->tiradentes = $this->tiradentes();
    $this->corpusChristi = $this->corpusChristi();
    $this->independencia = $this->independencia();
    $this->aparecida = $this->aparecida();
    $this->finados = $this->finados();
    $this->proclamacaoDaRepublica = $this->proclamacaoDaRepublica();
    $this->conscienciaNegra = $this->conscienciaNegra();
    $this->buildBrazilHolidays();
  }

  function buildBrazilHolidays() {
    $mainDates[$this->carnaval["date"]] = $this->carnaval;
    $mainDates[$this->paixao["date"]] = $this->paixao;
    $mainDates[$this->tiradentes["date"]] = $this->tiradentes;
    $mainDates[$this->corpusChristi["date"]] = $this->corpusChristi;
    $mainDates[$this->independencia["date"]] = $this->independencia;
    $mainDates[$this->aparecida["date"]] = $this->aparecida;
    $mainDates[$this->finados["date"]] = $this->finados;
    $mainDates[$this->proclamacaoDaRepublica["date"]] = $this->proclamacaoDaRepublica;
    $mainDates[$this->conscienciaNegra["date"]] = $this->conscienciaNegra;
    $this->holidays["main"] = array_merge($this->holidays["main"], $mainDates);
    ksort($this->holidays["main"]);
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function carnaval() : array {
    $date = date_sub(
      date_create($this->easter["date"]), date_interval_create_from_date_string('47 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "carnaval");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function paixao() : array {
    $date = date_sub(
      date_create($this->easter["date"]), date_interval_create_from_date_string('2 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "sexta-feira da paixão");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function tiradentes() : array {
    return $this->buildHoliday($this->year."-04-21", "tiradentes");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function corpusChristi() : array {
    $date = date_add(
      date_create($this->easter["date"]), date_interval_create_from_date_string('60 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "corpus christi");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function independencia() : array {
    return $this->buildHoliday($this->year."-09-07", "independência");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function aparecida() : array {
    return $this->buildHoliday($this->year."-10-12", "nossa senhora aparecida");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function finados() : array {
    return $this->buildHoliday($this->year."-11-02", "finados");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function proclamacaoDaRepublica() : array {
    return $this->buildHoliday($this->year."-11-15", "proclamação da república");
  }

  #[ArrayShape(["date" => "string", "name" => "string", "weekday" => "string", "coverage" => "string"])]
  function conscienciaNegra() : array {
    return $this->buildHoliday($this->year."-11-20", "consciência negra");
  }
}
