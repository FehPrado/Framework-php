<?php class UserModel extends Model{

  static public $table = "users";

  public $id;
  public $name;
  public $emial;
  public $password;

  protected static $permited_params = ['name', 'email', 'password'];
  

}