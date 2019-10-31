<?php


abstract class Helpers
{
    protected static $db = 'data/counter.txt';

    static function counter(){

        $counter = 1;
        if(file_exists(self::$db)){
            $counter = (int)file_get_contents(self::$db);
            $counter++;
            file_put_contents(self::$db, $counter);
        }
        file_put_contents(self::$db, $counter);
    }

    /**
     * @return false|string
     */
    static function get_visitor(){
        return file_get_contents(self::$db);
    }


}