<?php

// キーと値を持つ連想配列を作成し、変数に代入
$dates = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

// foreach文とecho文を使って、キーと値を出力する
foreach ($dates as $key => $value) {
  echo $key . ':' . $value . '<br>';
}

