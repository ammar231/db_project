<?php
require_once('../mysqli_connect.php');

$query = "SELECT a.ac_ID, a.name, r.room_ID, r.cost, r.num_rooms, r.bed_type FROM rooms r, accomodation a, contains c where r.room_ID = c.room_ID and c.ac_ID = a.ac_ID";
if ($result = mysqli_query($con, $query)){

                 echo "<table>";
                 //header
                 echo "<tr><td>AC_ID</td>";
								 echo "<td>AC Name</td>";
                 echo "<td>Room_ID</td>";
                 echo "<td>cost</td>";
                 echo "<td>Number of Rooms</td>";
                 echo "<td>Bed Type</td></tr>";
                     //data
                    while ($row = mysqli_fetch_array($result))  {
                       echo "<td>{$row[0]}</td>";
                       echo "<td>{$row[1]}</td>";
                       echo "<td>{$row[2]}</td>";
                       echo "<td>{$row[3]}</td>";
											 echo "<td>{$row[4]}</td>";
											 echo "<td>{$row[5]}</td></tr>";
                     }

                     echo "</table>";
             }
             $row_cnt = mysqli_num_rows($result);

             printf("Result set has %d rows.\n", $row_cnt);
             mysqli_free_result($result);
             echo '<a href="addroom.php">Add room</a>
             <a href="index.php">Home</a>';

 mysqli_close($con);

?>
