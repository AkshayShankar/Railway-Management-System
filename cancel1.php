<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet" />
  <link href="./cancel.css" rel="stylesheet" />
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
        <div class="v25_35">
          <div class="v25_60">
            <div class="v25_36">
              <div class="v25_37">
                <div class="v25_38">
                  <div class="v25_39">
                    <div class="v25_40">
                      <div style="position: relative; top: -20px;">
                      </div>
                    </div>
                    <span class="v25_41">Cancel</span>
                    <div class="v25_42"></div>
                    <span class="v25_57">Enter your Ticket ID</span>
                    <div class="v25_58"></div>
                    <form name="frmCheck" method="post" action="http://localhost/railway/cancel.php">
                      <div>
                        <input name="txtTicket" type="text" class="v25_58" placeholder="XXXX" />
                      </div>
                      <div class="v54_4">
                        <div class="v54_3">
                          <input name="submit" class="btn1" value="Cancel" background-color: #00b3b4 type="Submit" id="submit" />
                    </div>
                        </div>
                      </div>
                    </form>
                    <div class="v25_59">
                      <table class="fl-table">
                        <thead>
                          <tr>
                            <th>TicketID</th>
                            <th>Aadhaar</th>
                            <th>TrainID</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Class</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $con = mysqli_connect('localhost','root','','railway_database');

                            $sql = "SELECT * FROM ticket";
                            $result = $con->query($sql);
                            if($result)
                              while($row = $result->fetch_assoc())
                                echo "<tr><td>".$row["Ticket ID"]."</td><td>".$row["Ticket Aadhaar number"]."</td><td>".$row["Ticket Train ID"]."</td><td>".$row["Source location"]."</td><td>".$row["Destination location"]."</td><td>".$row["Class"]."</td><td>".$row["Date of journey"]."</td></tr>";
                            $con -> close();
                          ?>
                        <tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="https://widget.flowxo.com/embed.js"
          data-fxo-widget="eyJ0aGVtZSI6IiM0MmE5OWYiLCJ3ZWIiOnsiYm90SWQiOiI2MWI4ZGVlMDVmOGFjNzAwYmNiZTgzNGEiLCJ0aGVtZSI6IiM0MmE5OWYiLCJsYWJlbCI6IkNoYXQgV2l0aCBNZSEgIn0sIndlbGNvbWVUZXh0IjoiSSBhbSBoZXJlISIsInBvcHVwSGVpZ2h0IjoiMTAwJSJ9"
          async defer>
        </script>
      </body>

      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>


    </ul>

  </div>

</html>