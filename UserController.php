<?php class UserController {

  function index(){
    $users = UserModel::all();
    Views::render('user.index', get_defined_vars()); 
  }
	

  function new () {

		Views::render('user.new', get_defined_vars());
	}
	
	function create (){
		$user = UserModel::new($_POST);
		Views::redirect('/usuario');
	}
	
	function show($id) {
		$user = UserModel::find($id);
		Views::render('user.show', get_defined_vars());
		
	}
	
	function destroy ($id) {
		UserModel::destroy($id);
		Views::redirect('/usuario');
	}

	function edit ($id) {
		$user = UserModel::find($id);
		Views::render('user.edit', get_defined_vars());
	}

	function update ($id) {
		$user = UserModel::find($id);
		$user->update($_REQUEST);
		Views::redirect('/usuario');
	}

	function login () {
	  $users = UserModel::all();
		Views::render('user.login', get_defined_vars());
	}

	function open(){
		$user = UserModel::validate($_POST);
		Views::redirect('/usuario');
	}
	

}


