<?php class UserController {

  function index(){
    
      $users = UserModel::all();
      Views::render('user.index', get_defined_vars());
    
  }

}