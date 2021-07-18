<?php

$users = [
    1,
    2,
    3,
    4,
    5
];
echo "<pre>";
print_r($users);
echo"</pre>";
// echo $users[0];
// echo $users[1];
// echo $users[2];
// echo $users[3];
foreach($users as  $user){
    echo $user;
    echo "<br>";
}

?>
