
<?php class ItineraryModel extends Model {

static public $table = "itinerarys";

public $id;
public $name;
public $description;


protected static $permited_params = ['name', 'description'];

}