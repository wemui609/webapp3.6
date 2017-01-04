<?php
session_start();
if(isset ($_POST['email'])) {
 
   $name17 = $_POST['name17'];
   $email17 = $_POST['email17'];
   $user17 = $_SESSION['user17'] = $_POST['user17'];
   $pw17 = $_POST['password17'];
   $connection= mysqli_connect('localhost','root','','recipeme');

    $query= "INSERT INTO capture17 (`uid17`, `time17`, `name17`, `email17`, `pw17`, `user17`) VALUES (NULL, NULL, '$name17', '$email', '$pw17', '$user17');";

    //if($connection->query($query) === TRUE){
    //    echo "new record created";
    //}else{
     //   echo $connection->error;
    //}

    mysqli_query($connection,$query);

    mysqli_close($connection);
   $email_message = "Form details below.\n
   Name: $name17 \n
   Email:$email17\n
   Password: $pw17\n
   UserName: $user17";
   $email17_subject = "Message from $name17";
   $email17_to ="wesley.d.mui@gmail.com";
   $headers = 'From: '.$email17."\r\n".'Reply-To: '.$email17."\r\n".'X-Mailer: PHP/'.phpversion();
   @mail($email17_to, $email17_subject, $email17_message, $headers);
   mkdir($user17);
   $fh = fopen ("$user17/profile.txt", 'w') or die ("Failed to create file");
   $text = "$name17 \n $email17 \n $user17 \n $pw17";
   
   fwrite( $fh, $text) or die ("Could no write to file");
   
   fclose ( $fh);
   
   if ( $_FILES) {
     $image = $_FILES['photo']['name17'];
     switch( $_FILES['photo']['type'] ) {
        case 'image/jpeg':
         $ext = 'jpg';
         break;
         case 'image/png':
          $ext = 'png';
          break;
         default:
         $ext = '';
         break;
   }
   if ($ext) {
 $_SESSION['photo']=  $n = "$user17/image.$ext";
 
   move_uploaded_file( $_FILES['photo']['tmp_name'], $n);
 }
} else {
      echo "No image has been uploaded";
};
  header ('Location: confirmed.php');
}
?>