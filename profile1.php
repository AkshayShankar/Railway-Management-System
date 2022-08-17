<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet" />
  <link href="./profile1.css" rel="stylesheet" />
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
          <form name="frmProfile" method="post" action="http://localhost/railway/profile.php">
            <div class="v70_29">
              <div class="v70_30">
                <div class="v70_31">
                  <span class="v70_33">Profile</span>
                  <span class="v70_34">Residential_Address</span>
                  <div class="v70_35">
                    <span class="v70_36">Name</span><span class="v70_37">Phone Number</span>
                    <span class="v70_38">Permanent_Address</span><span class="v70_39">Aadhaar Card Number</span>
                    <div>
                      <input class="v70_40" type="text" name="txtName" placeholder="Rishikesh Reddy"
                        pattern="[A-Z a-z]+" maxlength="32" required />
                    </div>
                    <div>
                      <input class="v70_46" type="text" name="txtGender" placeholder="M/F" maxlength="1" required />
                    </div>
                    <div>
                      <input class="v70_42" type="text" name="txtAddress1"
                        placeholder="Enter Flat Number/Street Name/Locality/City" minlength="10" required />
                    </div>
                    <div>
                      <input class="v70_44" type="text" name="txtAddress2"
                        placeholder="Enter Flat Number/Street Name/Locality/City" minlength="10" required />
                    </div>
                    <div>
                      <input class="v70_45" type="date" name="txtDate" value="2000-01-01"
                        min="1950-12-12" max="<?php echo date('Y-m-d'); ?>" required />
                    </div>
                    <div>
                      <input name="submit" class="v70_43" value="submit" type="Submit" />
                    </div>
                    <div>
                      <input class="v70_41" type="text" name="txtMobile" placeholder="7760892233" pattern="[0-9]+"
                        maxlength="10" minlength="10" required />
                    </div>
                    <span class="v70_47">Gender</span><span class="v70_48">Date of Birth</span>
                  </div>
                  <div>
                    <input type="text" class="v70_49" name="txtAadhaar" placeholder="XXXX XXXX XXXX" pattern="[0-9 ]+"
                      minlength="14" maxlength="14" required />
                  </div>

                  <!--<div class="v70_50"></div>-->
                </div>

              </div>

            </div>
          </form>

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
<script src="https://widget.flowxo.com/embed.js"
  data-fxo-widget="eyJ0aGVtZSI6IiM0MmE5OWYiLCJ3ZWIiOnsiYm90SWQiOiI2MWI4ZGVlMDVmOGFjNzAwYmNiZTgzNGEiLCJ0aGVtZSI6IiM0MmE5OWYiLCJsYWJlbCI6IkNoYXQgV2l0aCBNZSEgIn0sIndlbGNvbWVUZXh0IjoiSSBhbSBoZXJlISIsInBvcHVwSGVpZ2h0IjoiMTAwJSJ9"
  async defer></script>

</html>