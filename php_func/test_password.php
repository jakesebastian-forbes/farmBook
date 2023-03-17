<?php




$password = 'password';

$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
// echo strlen($hashed_pass);



// echo(password_verify($password,$hashed_pass));
// // echo(password_verify('passs1',$hashed_pass));

if (password_verify('rasmuslerdorf', $hashed_pass)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}



 ?>
