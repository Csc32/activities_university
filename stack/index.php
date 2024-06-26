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
    $counter = 1;
    $totalLap = 1;
    while (true) {
      print("Vuelta numero: $totalLap \n");
      if ($totalLap == $this->finishLap) {
        $el = readline("Ingrese un elemento: \n");
        if (!$this->validateElement($el)) {
          print("\n Ingrese un elemento valido\n");
        } else {
          self::$stack[] = $el;
        }
        print("Proceso de insercion terminado total de vueltas: $totalLap \n");
        break;
      }
      if ($counter !== $this->lap) {
        $counter++;
        $totalLap++;
      } else {
        $el = readline("Ingrese un elemento: \n");
        if (!$this->validateElement($el)) {
          print("\n Ingrese un elemento valido\n");
        } else {
          self::$stack[] = $el;
        }
        $counter = 1;
        $totalLap++;
      }
    }
  }
  private function validateElement($el): bool
  {
    return isset($el) && strlen($el) > 0;
  }
  public function remove()
  {
  for ($i = count(self::$stack) - 1; $i >= 0; $i--) {
        print("[$i]" . " ");
        
        $dataRemoved = array_pop(self::$stack); 
        
        print("Elemento eliminado: $dataRemoved\n");
    }
  }

  public function show()
  {
    return print_r(self::$stack);
  }
}

$test = new Stack();
$test->insertElement();
$test->show();
$test->remove();
