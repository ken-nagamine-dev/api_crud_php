<?php

namespace App\Services;

use App\Models\User;

class UserService
{
   public function get($id = null)
   {
      if ($id) {
         return User::select($id);
      } else {
         return User::selectAll();
      }
   }

   public function post()
   {
      $data = json_decode(file_get_contents('php://input'));
      if($data !== NULL){
         return User::insert($data);
      }
      http_response_code(400);
      return 'Error, check that all fields are filled in correctly!';
   }

   public function put($id = null)
   {
      if($id === null){
         http_response_code(400);
         return 'Error: User id is null!';
      }
      $data = json_decode(file_get_contents('php://input'));
      if($data !== NULL){
         return User::update($data, $id);
      }
      http_response_code(400);
      return 'Error, check that all fields are filled in correctly!';
   }

   public function delete($id = null)
   {
      if($id === null){
         http_response_code(400);
         return 'Error: User id is null!';
      }
      return User::delete($id);
   }
}
