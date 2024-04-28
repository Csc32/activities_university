<?php 
//pila
class Stack {
  protected static Array $stack = [];

  public function save($el): Int {
    return self::$stack[] = $el;
  }

  public function show(){
    return print_r(self::$stack);
  }

  public function remove(){
    $total = count(self::$stack);

    $dataRemoved = self::$stack[$total - 1];
    unset(self::$stack[$total - 1]);

    return $dataRemoved;
  }
}

$stack = new Stack();

//insert ramdon data

for ($i=0; $i < 10 ; $i++) { 
  echo "\n input: $i";
  $stack->save($i);
}

//show data
$stack->show();


//remove data

for ($i=0; $i < 10 ; $i++) { 
  $data = $stack->remove();
  echo "data output: $data \n";
}
//cola
class Queue{
  
  protected static Array $queue = [];

  public function save($el): Int {
    return self::$queue[] = $el;
  }

  public function show(){
    return print_r(self::$queue);
  }

  public function remove(){
    $total = count(self::$queue);
    for ($i=0; $i < $total ; $i++) { 
      $dataRemoved = self::$queue[$i];
      echo "output: $dataRemoved \n";
      unset(self::$queue[$i]);
    }
  }
}
echo "-------------Queue Example-----------\n";
$queue = new Queue();

//insert ramdon data

for ($i=0; $i < 10 ; $i++) { 
  echo "\n input: $i";
  $queue->save($i);
}

//show data
echo "\n ------------ Show data ---------------------\n";
$queue->show();


//remove data
echo $queue->remove();
