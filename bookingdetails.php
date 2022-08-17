<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet" />
  <link href="./bookingdetails1.css" rel="stylesheet" />
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
                    <span class="v25_41">Booking Details</span>
                    <div class="v25_42"></div>
                    <span class="v25_57">Aadhaar Number</span>
                    <div class="v25_58"></div>
                    <form name="frmCheck" method="post" action="http://localhost/railway/bookingdetails1.php">
                        <div>
                            <input type="text" name="txtAadhaar" class="v25_58" placeholder="XXXX XXXX XXXX" pattern="[0-9 ]+"
                                minlength="14" maxlength="14" required/>
                        </div>
                        <div class="v54_4">
                          <div class="v54_3">
                            <input name="submit" class="v54_3" value="submit" type="Submit" id="submit" />
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
          async defer></script>
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