<?php
function smarty_modifier_nice_number($value, $separator = ' '){
    if(is_numeric($value = trim($value))){
        $out = '';
        $len = strlen($value);
        $len_begin = $len % 3;
        $out .= substr($value, 0, $len_begin);
        $index = $len_begin;
        while($index <= $len - 1){
            $out .= $separator . substr($value, $index, 3);
            $index += 3;
        }
        return $out;
    }else{
        return $value;
    }
}
?>