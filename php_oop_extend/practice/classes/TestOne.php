<?php

class TestOne
{
    private $name='ferdi';
    public $alamat='jepara';
    protected $motor='honda';

    public function set_name($new_name)
    {
        $this->name=$new_name;
    }

    public function get_name()
    {
        echo "nama saya {$this->name}";
    }

    protected function type_motor()
    {
        return "hidupkan motor";
    }

    public function on_motor()
    {
        return $this->type_motor();
    }
}

?>
