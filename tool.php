<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/7/19
 * Time: 上午10:06
 */

/**
 * 檢查當前記憶體用量
 * @return string
 */
function memory_use_now()
{
    $level = array('Bytes', 'KB', 'MB', 'GB');
    $n = memory_get_usage();
    for ($i=0, $max=count($level); $i<$max; $i++)
    {
        if ($n < 1024)
        {
            $n = round($n, 2);
            return "{$n} {$level[$i]}";
        }
        $n /= 1024;
    }
}

/**
 * @param $input
 * 物件或者陣列
 * @param $key
 * 要搜尋的關鍵字
 * @return array
 * 回傳陣列陣列 精準搜尋 裡面包含了關鍵字的路徑
 */
function find_key_in_ArrayOrObject($input,$key){
    //init
    $output=array(
    );
    //
    foreach ($input as $k => $v) {
        //找到keyword
        if ($v == $key) {//一般變數
            if(is_object($input)){
                $temp='->'.$k;
            }else{
                $temp='['.$k.']';
            }
            $output[]=$temp;
        }else if(is_array($v)){
            $temp_output=find_key_in_ArrayOrObject($v,$key);
            if(isset($temp_output)){
                foreach ($temp_output as $item){
                    $output[]='['.$k.']'.$item;
                }
            }
        }else if(is_object($v)){
            $temp_output=find_key_in_ArrayOrObject($v,$key);
            if(isset($temp_output)){
                foreach ($temp_output as $item){
                    $output[]='->'.$k.$item;
                }
            }
        }
    }
    //結果
    if(!empty($output))
        return $output;
}


