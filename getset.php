<?php


//class
class robot{

	//property
	public $suara;
	public $berat;

	//metode get && set
	public function set_suara($suara){
		$this->suara =$suara;
	}

	public function get_suara(){
		return $this->suara;
	}
}
$robot1 = new robot;
$robot1->set_suara("ngik ngik ngok");
echo "Bunyinya...".$robot1->get_suara();
?>