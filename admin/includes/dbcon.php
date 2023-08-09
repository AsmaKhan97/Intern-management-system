<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "imsproj";

$con = mysqli_connect($server,$user,$password,$db);

if(!$con){
    ?>
    <script>
        alert("Connection not Successful");
        </script>



<?php
//}
//else
//{

    ?>
   <!-- <script>
        alert("No Connection ");
        </script>    -->
        <?php
}

?>