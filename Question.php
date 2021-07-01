<?php
    class Animal {
	    public $animals = array("犬" => "卵じゃない", "猫" => "卵じゃない", "鳥" => "卵", "亀" => "卵");
	   
	    // キーワード：「連想配列」
	  
	    function egg() {
	    
	        // Q.1 上で定義されているanimalsという連想配列にキー：魚、値：卵という要素を追加し、魚というキーから値を表示せよ。
	        // ヒント：変数の呼び出し方・値の表示の仕方はカリキュラム04−１の解答を参考にしてみよう！
	         $this->animals = array_merge($this->animals,array('魚'=>'卵'));
	        //	echo $animals['魚'] . PHP_EOL;
	   
	        // Q.2 animals配列の中で値が卵である要素のキーだけを表示せよ。
	        // ヒント：配列の要素を確認するときは繰り返し構文（foreach）を使おう！！
	        foreach($this->animals as $name => $isOrNot){
	    	if($isOrNot === '卵'){
	    		echo $name . PHP_EOL;
	    	}
	        }
	    }
	    }
    
    $this_is_test = new Animal;
    $this_is_test->egg();
    
    // ファイルの実行コマンドは "php Question.php"
    
?>
