<?php
namespace App\Models;

class DB
{
   public static function connect()
   {
      $dbdriver = 'mysql';
      $dbname = 'api_php';
      $host = 'localhost';
      $user = 'root';
      $password = '';
      return new \PDO("{$dbdriver}:host={$host};dbname={$dbname};", $user, $password);
   }
}
