<?php
function user_exists($email) {
    $conn = mysqli_connect('localhost','root','', 'mini') ;

    $email = sanitize($email);

    //echo "**",$email ,"**";

    $query = mysqli_query($conn, "Select count('user_id') from users where email = '$email'");

    $row = mysqli_fetch_array($query);



    /*if ($query && mysqli_num_rows($query) == 1) {
    $row = mysqli_fetch_assoc()['count_val'];
        echo "Inside";
        return true;
    }*/

    //echo $row[0];

    if($row[0] == 1){
      //echo "you are valid";
      return true;
    }
    else{
      //echo "not valid";
    }
    return false;
}

function user_id_from_email($email){
  $conn = mysqli_connect('localhost','root','', 'mini') ;
  $email = sanitize($email);
  //return mysql_result(mysqli_query("SELECT user_id from users where email = '$email'"), 0, 'user_id');
  $query = mysqli_query($conn, "SELECT user_id from users where email = '$email'");
  $row = mysqli_fetch_array($query);
  return $row[0];
}

function login($email, $password){
  $conn = mysqli_connect('localhost','root','', 'mini') ;
  $user_id = user_id_from_email($email);

  $email = sanitize($email);
  $password = md5($password);

  //return (mysql_result(mysqli_query("Select count('user_id') from users where email = '$email' AND password = '$password'"), 0) == 1) ? $user_id : false;
  $query = mysqli_query($conn, "Select count('user_id') from users where email = '$email' AND password = '$password'");
  $row = mysqli_fetch_array($query);

  if($row[0] == 1){
    //echo "you are valid";
    return $user_id;
  }
  else{
    //echo "not valid";
    
  }
  return false;

}

?>
