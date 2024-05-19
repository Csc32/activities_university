<?php
class Stack
{
  protected static array $stack = [];
  public Int  $lap;
  public Int $finishLap;

  public function __construct($lap = 100, $finishLap = 1000)
  {
    $this->lap = $lap;
    $this->finishLap = $finishLap;
  }

  public function insertElement()
  {
    $el = readline("Ingrese un elemento: \n");
    if (!$this->validateElement($el)) {
      print("Ingrese un elemento valido");
      return;
    }
  }
  private function validateElement($el): bool
  {
    return isset($el) || strlen($el) == 0 ?  false : true;
  }
  public function remove()
  {
    $total = count(self::$stack);

    $dataRemoved = self::$stack[$total - 1];
    unset(self::$stack[$total - 1]);

    return $dataRemoved;
  }
}

$test = new Stack();
$test->insertElement();
