<?php 
interface A{
	function hello();
}

interface B{
	 function bye();
}

interface C{
	function add($a,$b);
}
	class P implements A,B,C{
			public function hello()
				{
					return "Hello";
				}
			public function bye()
				{
					return "Bye";
				}
			public function add($a,$b)
				{
					echo $a+$b;
				}	
	}

$obj=new P();
echo $obj->hello();
echo "<br>";
echo $obj->bye();
echo "<br>";
echo $obj->add(10,20);
 ?>
