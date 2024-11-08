<?php
class Checker {
  private $code;

  public function __construct($code) {
    $this->code = $code;
  }

  public function isValid() {
    $counter = 0;

    for ($i = 0; $i < strlen($this->code); $i++) {
      $char = $this->code[$i];

      if ($char === '{') {
        $counter++;
      } elseif ($char === '}') {
        $counter--;
      }

      if ($counter < 0) {
        return false;
      }
    }

    return $counter === 0;
  }
}

$code1 = "{{lajkdhf{adfa}{}adfasdfadf{}}}";
$code2 = "{{lajkdhf{adfa";

$checker1 = new Checker($code1);
$checker2 = new Checker($code2);

echo $checker1->isValid() ? "Корректный код\n" : "Некорректный код\n";
echo $checker2->isValid() ? "Корректный код\n" : "Некорректный код\n";
?>
