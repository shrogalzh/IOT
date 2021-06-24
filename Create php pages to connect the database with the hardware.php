
<?php
                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "control of robot arm");
                                  
                                   // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `range` WHERE 1"); 

          // LOOP TO PRINT DATA

While($row = $result->fetch_assoc()){

                echo "المحرك الأول : ".$row['Range1']."<br>";
                echo "المحرك الثاني : ".$row['Range2']."<br>";
                echo "المحرك الثالث : ".$row['Range3']."<br>";
                echo "المحرك الرابع : ".$row['Range4']."<br>";
                echo "المحرك الخامس : ".$row['Range6']."<br>";
                echo "المحرك السادس : ".$row['Range6']."<br>";
                echo "زر التشغيل : ".$row['on or off']."<br>";


          }

          $conn->close(); 

          ?>

            




