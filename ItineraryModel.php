
<?php class ItineraryModel extends Model {

static public $table = "itinerarys";

public $id;
public $name;
public $description;
public $img;

// if($_FILES["$img"]["size"] > 0) {
//   $extensaoArquivo = end(explode('.',$_FILES["$img"]["name"]));
//   $nomeArquivo = "photo/".sha1(time().$_FILES["$img"]["name"]).".".$extensaoArquivo;


protected static $permited_params = ['name', 'description', 'img'];

}