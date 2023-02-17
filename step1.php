<?php
class Test
{
    public $Value = 0;
    public function print()
    {
        echo "<b>this is a value :{$this->Value}</b><br>";
    }
    public function addkon()
    {
        $add = $this->Value + 1;
        echo "<h3>this added value: {$add}</h3>";
    }
    public function photo()
    {
        echo "<img src=\"image.jpg\" alt=\"Image\">";
    }
}
$test = new Test();
$test->print();
$test->addkon();
$test->photo();
?>
