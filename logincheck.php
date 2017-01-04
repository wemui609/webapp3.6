<?php session_start(); 

    
        $uname=$_POST['uname'];
        $pw=$_POST['pw'];

        $connection = mysqli_connect("localhost","root","","recipeme");

        $query = "SELECT * FROM capture17 WHERE pw17='$pw17' AND user17='$uname'";

        $loginCheck = mysqli_query($connection, $query);

        $row = mysqli_num_rows($loginCheck);

        //echo $row;

        //echo "<br>";

        if($row == 1){
            while($row = mysqli_fetch_assoc($loginCheck)){
                $_SESSION["uid17"] = $row["uid17"];
                //echo $_SESSION["uid"].'<br>';

                $_SESSION["time17"] = $row["time17"];
               //echo $_SESSION["time"].'<br>';
                
                $_SESSION["name17"] = $row["name17"];
                //echo $_SESSION["name"].'<br>';
                
                $_SESSION["email17"] = $row["email17"];
                //echo $_SESSION["email"].'<br>';
                
                $_SESSION["pw17"] = $row["pw17"];
                //echo $_SESSION["pw"].'<br>';

                 $_SESSION["user17"] = $row["user17"];
                //echo $_SESSION["user"].'<br>';

               // echo "<a href=\"profile.php\">proceed to profile</a>";
            }

        } else {
            //echo "try again";
        }
        mysqli_close($connection);


  
header ('Location: profile.php');
?>