<?php
namespace App\Models;

class DB
{
   public static function connect()
   {
      // place to configure database
      $dbdriver = '';
      $dbname = '';
      $host = '';
      $user = '';
      $password = '';
      return new \PDO("{$dbdriver}:host={$host};dbname={$dbname};", $user, $password);
   }
}
