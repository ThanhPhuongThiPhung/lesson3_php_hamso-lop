
 <?php
//  hamso 
 function sayhello(){
     echo"hello wordl"."\n";
 }
 sayhello();
 ?>
 <?php
 $sayhello02 = function(){
     echo"Good morning"."\n";

 };
 $sayhello02();
?>
<?php
function sayhello03($greeting){
    echo $greeting."\n";
};
sayhello03("goodaffternoon");
?>
<?php
function cal($x, $y){
    echo ($x *$y)."\n";
};
cal(6,2);
?>
<?php
function cal2($x, $y){
    return ($x *$y);
};
$result =cal2(6,2);
echo $result."\n"
?>

<?php
// lop
    class Student{
        function avg(){
        echo ((80+70)/2)."\n";
    }
}
    $a001 = new Student();
    $a001 ->avg();
?>
<?php
    class Student02{
        public $name;
        function arv($so1,$so2){
            echo(($so1+$so2)/2)."\n";
        }
    }
    $a002 = new Student02();
    $a002 ->arv(80,60); 
    $a002->name="sato";
    echo $a002-> name."\n";
    ?>
    <?php
    class Student03{
        public function __contruct($name2){
            $this->name2= $name2;
        }function avn($so3,$so4){
            echo (($so3+$so4)/2)."\n";
        }
    }
    $a003 = new Student03("tanka");
    
    echo $a003 ->name2."\n"; 

