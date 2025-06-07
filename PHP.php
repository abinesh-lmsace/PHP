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
______________________________________________________________________________________________________________________
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
____________________________________________________________________________________________________________________________
<?php    						#Private function:
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
____________________________________________________________________________________________________________________________
<?php							#Protected function:
class pen{
    public $rpen;
    public $ipen;
    public $cpen;
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
____________________________________________________________________________________________________________________________
<?php
$a = 5;
$b=&$a;  # (& is a prepend /set the value to another variable)
echo $b; # Output : 5
$b = 7;  # (set value has been overwrited)
echo $b; # Output : 7
?>
____________________________________________________________________________________________________________________________
<?php                           #return keyword
    function value($a){
        return $a-1;
        echo "value of".$a;     #return keyword cannot run the code written after return in function
    }
    echo value(6); #Output : 5
?>
____________________________________________________________________________________________________________________________
<?php                           #constants keyword
    const apple = 100;          #(once the constant is declared it cannot be changed after declaration)
    const orange = 50;          #(const apple & $apple store different values both are not same)
                                #we cannot declare const inside function instead we can use define()
                                #we cannot declare define() inside class instead we can use const
    $apple = 120;               

    echo apple;                 
    echo $apple;                
?>
___________________________________________________________________________________________________________________________
<?php                           #function with default arguments & non-default arguments ($hp,$samsung are default argument&$lenovo is non default argument)
    function pc($hp, $samsung, $lenovo="11 Gen"){ #default argument comes first and non default argument comes second 
        echo $hp, $samsung, $lenovo;
    } 
    pc("7 Gen", "9 Gen");
    #(OR)
    #pc("7 Gen", "9 Gen", "13 Gen");
?>
____________________________________________________________________________________________________________________________
<?php
    class greetings{
        function __construct(){
            echo "Welcome greetings card";
        }
    }
    class message extends greetings{
        function __construct(){
            parent::__construct();
            echo "Welcome message";
        }        
    }
    class destruct{
        function __destruct(){

        }
    }
    $greet=new message();
?>
____________________________________________________________________________________________________________________________
<?php #Arrays type - indexed,associative, multidimensional arrays
    $fruit = array("apple", "orange", "mango", "banana");
    echo $fruit[0]; #indexed array have generate the index number automatically
        foreach($fruit as $f){
            echo $f;
        }
$pc = array("brand"=>"samsung", "model"=>"001", "gen"=>"13");
echo $fruit["gen"]; #Associative Arrays are having different index like string or int

    function arrfun(){#function inside array
        echo "Welcom to array function";
    }
    $arr = array(1, 2, arrfun);     #or     #$arr = array(1, 2, arrfun());      #or         $arr = array(1, 2, "fun"=>arrfun());
    echo $arr[2]();                 #or     #$arr[2];                           #or         $arr["fun"];
    
    unset($fruit[0]);
    print_r($fruit);                #unset function will delete the array value with index and cannot update the index number again for remaining array items
    
    /*array_splice($fruit, 2, 2);
    1st parameter - specifies the array 
    2nd parameter - specifies the array index number
    3rd parameter - specifies the no of array items to be removed. 
    array_splice function can reorder the array index numbers*/

    date_default_timezone_set("Asia/Kolkata");
    $h=date('h');
    $m=date('i');
    $a=date('a');
    #$d=date("h:i:s a");
    if($h<12 && $a=="am"){
        echo "Good morning";
    }
    elseif($h<5 && $a=="pm"){
        echo "Good afternoon";
    }elseif($a=="pm" && $h>=5 && $h=="9"){
        echo "Good evening";
    }
    else{
        echo "Good night";
    }
?>
____________________________________________________________________________________________________________________________
<?php                                               #Conditions & Loops
                                                    #(Conditions: if/elseif/else, switch) (Loops: for, while/do while, foreach)
    $days = array('january'=>'31', 'febraury'=>'28', 'march'=>'31','april'=>'30','may'=>'31');
    $months = 12;
    $price = 100;
    $fruits = array('apple', 'orange', 'mango', 'banana', 'grapes');

    if ($days['febraury'] === '30') {               #$days['febraury'] === '30' check both key and value 'febraury'=>'28'
        echo "Febraury has 30 days";       
    } elseif (array_search("30", $days, true)) {    #search the array value
        echo "April has 30 days";
    } else {
        echo "January, March, May has 31 days";
    }
    
    // switch ($days) {
    //     case (array_search("31", $days, true)):
    //         echo "January, March, May has 31 days";
    //         break;       
    //     default:
    //         echo "No more days available";
    //         break;
    // }

    $d = (array_search("31", $days, true));
    switch ($days) {
        case 31:
            echo "January, March, May has 31 days";
            break;       
        default:
            echo "No more days available";
            break;
    }

?> 