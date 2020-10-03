<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */
class Name{
    public $nama;
    private $alamat='magelang';
    
    public static function tampilkanName(){
        echo 'hello';
    }

    public function tampilkanNama()
    {
        echo 'nama saya rendi';
    }

    public function tampilkanAlamat(){
        return 'alamat saya'.' '.$this->alamat;
    }

}


$nama= new Name();
Name::tampilkanName();
echo PHP_EOL;
$nama->tampilkanNama();
echo PHP_EOL;
echo $nama->tampilkanAlamat();
class Motor
{
    protected $kecepatanMax;
 
    protected function lihatKecepatan()
    {
        return $this->kecepatanMax = 150;
    }
}
 
class motorNinja extends Motor
{
 
    public function getSpeed()
    {
        return parent::lihatKecepatan();
    }
}
 
 
 
$motor = new motorNinja();
 
echo $motor->getSpeed();