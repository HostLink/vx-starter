abc

{{test('a')|raw}}
{{test('b')|raw}}
<?php
return new class
{
    public function  __construct()
    {
        $this->i=100;
    }

    public $i = 0;
    public function get(VX $vx)
    {
    }

    protected function test($x)
    {
        $this->i++;
        return "abc $x  " . $this->i . "<br/>";
    }

    public function hello()
    {
        return range(1, 10);
    }
};
