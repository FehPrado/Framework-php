<?php class UserController {

  function index(){
    
      $users = UserController::all();
      Views::render('user.index', get_defined_vars());
    
  }

}