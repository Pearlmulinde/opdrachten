<?php
class greeting {
    public $message = 'Hello All, iam';
    public function introduce ($name)
    {
        return $this-> message.$name;
    }
}
$mymessage = New greeting();
echo $mymessage-> introduce('scott')."\n";
?>