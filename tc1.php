<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet" />
  <link href="./tc2.css" rel="stylesheet" />
  <title>Document</title>
</head>
<body>
    <div class="banner-text">
		<ul>
			<li><a href="./home.php">Home</a></li>
			<li><a href="./about.php">About</a></li>
			<li><a href="./profile1.php">Profile</a></li>
      
			<li><a href="./signup.php">Sign Out</a></li>
		</ul>
	</div>
  <div class="animation-area">
    <ul class="box-area">

<body>
<div class="v69_27">
      <div class="v69_5">
        <div class="v69_6">
          <div class="v69_7"></div>
            <span class="v25_8">Train Checking or Booking</span>
          <div class="v69_10">
          <div class="v25_56">
            <form name="frmTicket" method="post" action="http://localhost/railway/Trainchecking2.php">
              
                <span class="v25_24">
                  Source
                </span>
                <span class="v25_30">TrainID</span>
                <div>
                  <input type="text" class="v25_25" name='txtSource1' value = <?php echo $_POST['txtSource']; ?> readonly />
                </div>
                <div>
                  <input type="text" class="v25_31" name='txtTrainID1' placeholder="Enter Train ID" minlength="4" maxlength="7" pattern="403[1-4]R?(SF)?"/>
                </div>
                <div>
                  <input type="date" class="v25_29" name='txtDate1' value = "<?php echo date($_POST['txtDate']) ?>" readonly/>
                </div>
                <input type="text" name='txtClass1' value = <?php echo $_POST['txtClass']; ?> style="display: none" />
                <div>
                  <input type="text" class="v25_27" name='txtDestination1' value = <?php echo $_POST['txtDestination']; ?> readonly/>
                </div>
            <span class="v25_26">Destination</span>
            <span class="v25_28">Date </span>
                <div class="v69_16"></div>
                <input name="submit" class="click" value="submit" type="Submit" id="submit" />
              
            </div>
      </div>
    </div>
            <div class="v25_34">
            <table class="fl-table">
                    <thead>
                      <tr>
                        <th>Train ID</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Number of seats</th>
                        <th>Fare</th>
                        <th>Arrv.Time</th>
                        <th>Dept.Time</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $con = mysqli_connect('localhost','root','','railway_database');

                        $txtSource = $_POST['txtSource'];
                        $txtDestination = $_POST['txtDestination'];
                        $txtDate = $_POST['txtDate'];
                        $txtClass = $_POST['txtClass'];

                        if($txtClass=='FC')
                          $class_fare = 500;
                        else if($txtClass=='SC')
                          $class_fare = 200;
                        else if($txtClass=='TC')
                          $class_fare = 50;
                        $chosen_class = "Number of ".$txtClass." seats available";

                        $train_ID = "(SELECT `PT_Train ID`, `Order of the station` FROM `passes through` WHERE `PT_Station code` IN 
                                        (SELECT `Station code` FROM station WHERE Place = '$txtSource')
                                      ) AS a 
                                      INNER JOIN
                                      (SELECT `PT_Train ID`, `Order of the station` FROM `passes through` WHERE `PT_Station code` IN 
                                        (SELECT `Station code` FROM station WHERE Place = '$txtDestination')
                                      ) AS b
                                      ON
                                      a.`PT_Train ID` = b.`PT_Train ID`
                                        WHERE
                                          a.`Order of the station` < b.`Order of the station`
                                    ";
                        $sql = "SELECT t.`Train ID`,t.`Source`,t.`Destination`,t.`Number of FC seats available`,t.`Number of SC seats available`,t.`Number of TC seats available` 
                                  FROM `train` AS t
                                      WHERE t.`Train ID` IN (SELECT a.`PT_Train ID` FROM $train_ID)";
                        
                        $result = mysqli_query($con, $sql);

                        $fare = "SELECT t.`Base Price` + t.`Travel Cost` * f.`d-s` + $class_fare AS Fare 
                                  FROM train AS t,
                                  (
                                    SELECT a.`PT_Train ID`,d-s FROM 
                                    (
                                      SELECT `PT_Train ID`, `Order of the station` AS s 
                                        FROM `passes through` 
                                          WHERE `PT_Station code` IN 
                                          (SELECT `Station code` FROM station WHERE Place = '$txtSource')
                                    ) AS a 
                                    INNER JOIN
                                    (
                                      SELECT `PT_Train ID`, `Order of the station` AS d 
                                        FROM `passes through` WHERE `PT_Station code` IN 
                                          (SELECT `Station code` FROM station WHERE Place = '$txtDestination')
                                    ) AS b
                                    ON
                                     a.`PT_Train ID` = b.`PT_Train ID`
                                    WHERE
                                      a.s < b.d
                                  )
                                  AS f WHERE t.`Train ID` = f.`PT_Train ID`";

                        $class_query = "UPDATE `ticket` SET Class = '$txtClass' WHERE `Ticket ID` IN (SELECT MAX(`Ticket ID`) FROM `ticket` WHERE Class IS NULL)";

                        $temp = $con-> query($class_query);
                        $resfare = $con-> query($fare);

                        $time = "SELECT `Arrival time`, `Departure time` FROM `passes through` WHERE `PT_Station code` IN 
                                          (SELECT `Station code` FROM station WHERE Place = '$txtSource') AND `PT_Train ID` IN (SELECT a.`PT_Train ID` FROM $train_ID)";
                        $restime = mysqli_query($con, $time);

                        if($result)
                          while($row = $result->fetch_assoc()) {
                            $rowfare = $resfare->fetch_assoc();
                            $rowtime = $restime->fetch_assoc();
                            echo "<tr><td>".$row["Train ID"]."</td><td>".$row["Source"]."</td><td>".$row["Destination"]."</td><td>".$row[$chosen_class]."</td><td>".$rowfare["Fare"]."</td><td>".$rowtime["Arrival time"]."</td><td>".$rowtime["Departure time"]."</td></tr>";
                          } 

                        $con -> close();
                      ?>
                    </tbody>
                  </table>
                </div>
                </form>
            </div>
          </div>
     
          </body>

<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>


</ul>


  </div>
</body>

</html>