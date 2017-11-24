<?php

class Text{

    /**
     * @param $chiffre
     * @return string
     */
    public static function withZero($chiffre){
        if ($chiffre < 10 ){
            return '0' . $chiffre;
        }else{
            return $chiffre;
        }
    }
}