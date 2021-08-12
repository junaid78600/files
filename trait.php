<?php 
trait hello{
	public function sayhello()
	{
		echo "say hello";
	}
	public function bye()
	{
		echo "bye";
	}
}
trait person{
	public function name()
	{
		echo "Junaid";
	}
}
class base{
	use hello,person;
}

$obj=new base();
$obj->sayhello();
echo "<br>";
$obj->bye();
echo "<br>";
$obj->name();
 ?>

