<?php
$user = $_GET["username"];
$pass = $_GET["password"];

class User {
	public $id 		= 0;
    public $comment = "";
    public $gallery = "";
}

$joe = new User();
$joe->id = 1;
$joe->comment = "Hey Joe!";
$joe->gallery = "images/a.png";
$jane = new User();
$jane->id = 2;
$jane->comment = "Hey Jane!";
$jane->gallery = "images/b.png";
$session_user = new User();
$session_user->comment = "Bad Login";

if ($user == "joe" && $pass == "joe123") {
    $session_user = &$joe;
}
else if ($user == "jane" && $pass == "jane123") {
    $session_user = &$jane;
}

echo json_encode($session_user);
/*
if ($user === "Jane" and $password === "admin") {
    $session_user->success = true;
    $session_user->gallery = jane->gallery;
    echo "Hey Jane!";
}
*/

?>