<?php
// Write a PHP function that checks whether a person is eligible to vote.
 
function check_vote() {
$name = "Tomi";
$age = "17";
if ($age >= 18){
    echo $name . ", you are Eligigble to vote. ";

}   else {
    echo $name . ", you are not Eligible to vote. <br> The voting age is 18 years";
} 
}
check_vote();
?>