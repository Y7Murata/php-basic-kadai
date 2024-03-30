<p>
         <?php
         $user_names = ['名前' => '玉ねぎ', '価格' => 200, '産地' => '北海道'];

         //  配列$user_namesのインデックスと値を1つずつ順番に出力する
         foreach ($user_names as $index => $value) {
          echo "{$index} : {$value}<br>";
      }
         ?>
</p>