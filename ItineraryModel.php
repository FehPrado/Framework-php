
<?php class ItineraryModel extends Model {

static public $table = "itinerarys";

public $id;
public $name;
public $description;
public $img;
public $date_start;
public $date_end;




protected static $permited_params = ['name', 'description', 'img', 'date_start', 'date_end'];

}