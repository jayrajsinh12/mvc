<?php
class a
{
    public function a1()
    {
        echo "a";
    }
}
class b extends a
{
    public function b1()
    {
        echo "b";
    }
}
class c extends a

{
    public function c1()
    {
        echo "c";
    }
}
$d=new b();
$e=new c();
$d->b1();
$e->c1();
$d->a1();

?>
