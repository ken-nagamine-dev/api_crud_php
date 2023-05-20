<?php 
namespace App\Models;

class User 
{
   private static $table = 'user';

   public static function select($id){
      $connectionPDO = DB::connect();

      $sql = "SELECT * FROM ".self::$table." WHERE id = :id ";
      $statement = $connectionPDO->prepare($sql);
      $statement->bindValue(":id", $id);
      $statement->execute();

      if($statement->rowCount() > 0){
         http_response_code(200);
         return $statement->fetch(\PDO::FETCH_ASSOC);
      } else {
         throw new \Exception(("No users found!"));
      }
   } 

   public static function selectAll(){
      $connectionPDO = DB::connect();

      $sql = 'SELECT * FROM '.self::$table;
      $statement = $connectionPDO->prepare($sql);
      $statement->execute();

      if($statement->rowCount() > 0){
         http_response_code(200);
         return $statement->fetchAll(\PDO::FETCH_ASSOC);
      } else {
         throw new \Exception(("No users found!"));
      }
   } 

   public static function insert($data)
   {
      $connectionPDO = DB::connect();
      $sql = 'INSERT INTO '.self::$table.' (email, name, password) VALUES (:email, :name, :password)';
      $statement = $connectionPDO->prepare($sql);
      $statement->bindValue(":email", $data->email);
      $statement->bindValue(":name", $data->name);
      $statement->bindValue(":password", $data->password);
      $statement->execute();

      if($statement->rowCount() > 0){
         http_response_code(201);
         return 'User entered successfully!';
      } else {
         throw new \Exception(("Failed to insert user!"));
      }
   }

   public static function update($data, $id)
   {
      $connectionPDO = DB::connect();
      $sql = 'UPDATE '.self::$table.' SET email = :email, name = :name, password = :password WHERE id = :id';
      $statement = $connectionPDO->prepare($sql);
      $statement->bindValue(":id", intval($id));
      $statement->bindValue(":email", $data->email);
      $statement->bindValue(":name", $data->name);
      $statement->bindValue(":password", $data->password);
      $statement->execute();

      if($statement->rowCount() > 0){
         return 'User changed successfully!';
      } else {
         throw new \Exception(("Failed to change user data!"));
      }
   }

   public static function delete($id)
   {
      $connectionPDO = DB::connect();
      $sql = 'DELETE FROM '.self::$table.' WHERE id = :id';
      $statement = $connectionPDO->prepare($sql);
      $statement->bindValue(":id", intval($id));
      $statement->execute();

      if($statement->rowCount() > 0){
         return 'User deleted successfully!';
      } else {
         throw new \Exception(("Failed to delete user!"));
      }
   }
}