<?php

function isPrimo($n){
    if($n == 1){
        return false;
}
for($i = 2; $i <= sqtr($n); $i++){
    if($n % $i == 0){
        return true;
}
}
return true;

};