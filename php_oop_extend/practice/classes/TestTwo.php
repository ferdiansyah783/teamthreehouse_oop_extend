<?php

include 'TestOne.php';

class TestTwo extends TestOne
{
   public function tes_properti()
   {
       echo $this->alamat;
       echo $this->motor;
    //    echo $this->name;
   }
}

$tampil= new TestTwo;
$tampil->tes_properti();
$tampil->alamat;
// $tampil->motor;
