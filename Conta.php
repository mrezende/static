<?php

class Conta
{
  public $numero; // atributo de objeto
  public $saldo;
  static public $contador = 0; // atributo de classe

  // construtor privado
  private function __construct()
  {
    self::$contador++;

  }

  // método da classe
  static public function criaConta()
  {
    return new Conta();
  }
}
