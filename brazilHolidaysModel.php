<?php
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
    $this->coverage = "Brazil";
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
    $dates[$this->carnaval["date"]] = $this->carnaval;
    $dates[$this->paixao["date"]] = $this->paixao;
    $dates[$this->tiradentes["date"]] = $this->tiradentes;
    $dates[$this->corpusChristi["date"]] = $this->corpusChristi;
    $dates[$this->independencia["date"]] = $this->independencia;
    $dates[$this->aparecida["date"]] = $this->aparecida;
    $dates[$this->finados["date"]] = $this->finados;
    $dates[$this->proclamacaoDaRepublica["date"]] = $this->proclamacaoDaRepublica;
    $dates[$this->conscienciaNegra["date"]] = $this->conscienciaNegra;
    $this->holidays["main"] = array_merge($this->holidays["main"], $dates);
    ksort($this->holidays["main"]);
  }

  function carnaval() {
    $date = date_sub(
      date_create($this->easter["date"]), date_interval_create_from_date_string('47 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "carnaval");
  }

  function paixao() {
    $date = date_sub(
      date_create($this->easter["date"]), date_interval_create_from_date_string('2 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "sexta-feira da paixão");
  }

  function tiradentes() {
    return $this->buildHoliday($this->year."-04-21", "tiradentes");
  }

  function corpusChristi() {
    $date = date_add(
      date_create($this->easter["date"]), date_interval_create_from_date_string('60 days')
    );
    return $this->buildHoliday(date_format($date, 'Y-m-d'), "corpus christi");
  }

  function independencia() {
    return $this->buildHoliday($this->year."-09-07", "independência");
  }

  function aparecida() {
    return $this->buildHoliday($this->year."-10-12", "nossa senhora aparecida");
  }
	
  function finados() {
    return $this->buildHoliday($this->year."-11-02", "finados");
  }

  function proclamacaoDaRepublica() {
    return $this->buildHoliday($this->year."-11-15", "proclamação da república");
  }

  function conscienciaNegra() {
    return $this->buildHoliday($this->year."-11-20", "dia da consciência negra");
  }
}
