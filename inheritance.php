Php - inheritance :
<?php							#Public Variables and Functions :
Class monitor{
    public $brand;		        #(Variables OR Properities with access specifiers)
    public $size;
    public $type;
    public $resolution;

    Function name($b,$t){		#(Functions OR Methods without access specifiers)
        echo 'Monitor brand name is : '.$this->brand=$b;
        echo '. Monitor is a '.$this->type=$t.' type.';
    }
}
$pc=new monitor();
$pc->name('LG', 'LED');

Class monitor1 extends monitor{
	Function __contruct(){
    	echo 'This is a constructor function this will automatically run the function without call the function';
	}
	Function name($b, $t){
       	echo ' Monitor brand name is : '.$this->brand=$b;
        echo '. Monitor is a '.$this->type=$t.' type.';
    }
}
$system=new monitor1();
$system->name('SAMSUNG', 'LCD');
?>
_________________________________________________________________________
<?php							#Private variable:
Class school{
	public $standard;
	private $boys=10;
	private $girls=10;

	function __construct($s){
		echo 'class: '.$this->standard=$s.'th standard';
	}
	function noofstudents(){
		echo ' Total no of students: '.$this->boys+$this->girls;
	}
	function boysvalue($bo){
		echo ' changed no of boys total private variable value is: '.$this->boys=$bo;
	}

}
$scl=new school(5);
$scl->noofstudents();
								#To change the private property value:
$scl->boysvalue(12);

?>
_________________________________________________________________________
<?php							#Private function:
class travels{
	private function car(){
		echo '7 seater car ';
		echo '10 seater car';
	}
	public function bus(){
		$this->car();  			#call private function in public function inside the class
		echo "\n";
		echo '50 seater bus ';
		echo '80 seater bus';

	}
}
$tourist=new travels();
#$tourist->car(); 				#class private function calling outside the class shown error
$tourist->bus();
?>
_________________________________________________________________________
<?php							#Protected function:
class pen{
	protected function price(){ #protected function call within the class or extended class
		$this->rpen=5;
		$this->ipen=20;
		$this->cpen=40;
	}
	public function model(){
		echo "refill pen";
		echo "ink pen";
		echo "cartridge pen";
	}
}
class penprice extends pen{
	public function modelprice(){
	}
}
?>