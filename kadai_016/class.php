<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
<p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }

             //プライスプロパティを出力する
             public function show_price(){
             echo $this->price; 
            }
        }

         // インスタンス化する
         $potato = new Food('potato',250);
 
         // インスタンス$priceの各プロパティの値を出力する
         print_r($potato);
         
        echo '<br>';
        
         // ここからAnimalクラス
         // クラスを定義する
         class  Animal {
          
         // プロパティを定義する                        
         private $name;
         private $height;
         private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        }

        //ハイトプロパティを出力
        public function show_height(){
            echo $this->height; 
           }
       }

        // インスタンス化する
        $dog = new Animal('dog',60,5000);

        // インスタンス$priceの各プロパティの値を出力する
        print_r($dog);
        
        echo '<br>';
        $dog->show_height();

        echo '<br>';
        $potato->show_price();
    
         ?>
     </p>
 </body>