<?php
namespace App\Components;

class CheckSearch {

    private $table;
    function checkSearch($keyword){
        
        $arr_keyword = explode(" ", $keyword);
        $str_keyword = "%" . implode("%", $arr_keyword) . "%";
        return $str_keyword;
    }

    function checkChoose($choose){
        if($choose=='cate-name'){
            $table = 'categories';
        }else{
            $table = 'products';
        }
        return $table;
    }

    function changeChoose($choose){
        if($choose=='cate-name'){
            $choose='name';
        }
        return $choose;
    }
}

?>