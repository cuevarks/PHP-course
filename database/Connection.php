<?php
/**
 * Created by PhpStorm.
 * User: Cuevas
 * Date: 2019-03-11
 * Time: 18:39
 */

class Connection
{
    public static function make()
    {
        try{
            return new PDO('mysql:host=localhost;dbname=mytodo','root','');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}