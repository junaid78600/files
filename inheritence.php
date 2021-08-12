<?php 
  class A{

        public $p=10;
        protected $k=20;
        private $u=30;

        public function use_private()
        {
        	return $this->u;
        }
}

class B extends A{
    public $j=100;
    public function add($a,$b)
    {
        return $a+$b;
    }
    public function protected_val()
    {
        return $this->k;
    }
    public function private_val()
    {
        return $this->u;
    }

}


$obj_A=new A();
echo "Private=".$obj_A->use_private();
echo "<br>";

$obj=new B();

echo"Add=".$obj->add(10,20);
echo "<br>";
echo "Public".$obj->p;
echo "<br>";
echo "Protected=".$obj->protected_val();
 ?>