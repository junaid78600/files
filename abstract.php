<?php 
 abstract class A{
	
 abstract protected function show();
 abstract protected function add($a,$b);
	}

class B extends  A{

		public function show(){
			echo "string";
		}

		protected function add($a,$b){
			echo $a+$b;;
		}

		public function pro($c,$d)
		{
			echo $this->add($c,$d);
		}
		public function mul($i,$j)
		{
			echo $i+$j;
		}
	}


$obj=new B();
echo "Show=";$obj->show();
echo "<br>";
echo "pro=";$obj->pro(10,10);
echo "<br>";
echo "Mul=";$obj->mul(10,10);

 ?>
