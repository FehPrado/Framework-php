<?php class UserModel extends Model{

  static public $table = "users";

  public $id;
  public $name;
  public $emial;
  public $password;

  protected static $permited_parms = ['name', 'email', 'password'];
  

}