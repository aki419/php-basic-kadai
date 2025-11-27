<?php
// Foodクラスを定義する
class Food {
  // プロパティを定義する
  public $name;
  public $price;

  // メソッドを定義する
  public function show_price() {
    echo $this->price;
  }

  // コンストラクタを定義する
  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;

  }
}

// Animalクラスを定義する
class Animal {
  // プロパティを定義する
  public $name;
  public $height;
  public $weight;

  // メソッドを定義する
  public function show_height() {
    echo $this->height;
  }

  // コンストラクタを定義する
  public function __construct($name, $height, $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

// インスタンス化する
$apple = new Food('りんご', 200);
$dog = new Animal('犬', 60, 20);

//　インスタンスを出力する
print_r($apple);
echo '<br>';
print_r($dog);
echo '<br>';

// メソッドを実行する
$apple->show_price();
echo '<br>';
$dog->show_height();
echo '<br>';
?>
