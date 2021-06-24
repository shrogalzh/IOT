 <?php
 
                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "control of robot arm");

                                    // TO CHECK CONNECTION
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
 $Range1=$_POST['Range1'];
 $Range2=$_POST['Range2'];
 $Range3=$_POST['Range3'];
 $Range4=$_POST['Range4'];
 $Range5=$_POST['Range5'];
 $Range6=$_POST['Range6'];
 $run=$_POST['run'];

if (isset($_POST['submit'])){
 

                      // ----------------- TO UPDATE DATABASE --------------------------------------

$sql="UPDATE `range` SET `Range1`='$Range1',`Range2`='$Range2',`Range3`='$Range3',`Range4`='$Range4',`Range5`='$Range5',`Range6`='$Range6' , `on or off`='$run' WHERE 1";



 //----------------- when the DATABASE IS NULL WE TURN ON --------------------------------------


 //$sql= "INSERT INTO `range` (`Range1`, `Range2`, `Range3`, `Range4`, `Range5`, `Range6`,`on or off`) VALUES ('".$_POST['Range1']."','".$_POST['Range2']."','".$_POST['Range3']."','".$_POST['Range4']."','".$_POST['Range5']."','".$_POST['Range6']."','".$_POST['run']."')";
 
echo "Record Values successfully";

$result = $conn->query($sql);
 

}


?>