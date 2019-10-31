<?php


class GetMessage
{
    private static $db,
            $messages = [];


    function __construct($file){

        self::$db = $file;
    }

    /**
     * @return array|mixed
     */
    static function findAll(){

        self::$messages = file_get_contents(self::$db);
        self::$messages = json_decode( self::$messages, true);

        return  self::$messages;
    }

    /**
     * @param $id
     * @return mixed
     */
    static function find($id){

        foreach (self::findAll() as $message){
            if(in_array($id, $message)){
               $data = $message;
            }
        }
        return $data;
    }

    /**
     * @return int
     */
    static function count(){
        return sizeof(self::findAll());
    }
}