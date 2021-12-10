<?php
for($i=0;$i<=20;$i++){
    if ($i%3==0 && $i%5==0){
        echo ("ong ba nam tay ba nam")."\n";
    }
    elseif($i%5==0) {
        echo ("ba nam")."\n";
    }
    else if($i%3==0 ){
        echo("ong ba ")."\n";
    }
    else echo($i)."\n";
}