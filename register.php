<?php
  include("header.php");
?>

    <div class="ui container">
    <form class="ui form" action="registerlogic.php" method="post" style="width: 60%; margin: auto; margin-top: 50px;">

        <div class="field">
         <label>Institute</label>
         <select name="institute">
            <option value="">Institutes</option>
            <option value="ABV-IIITM, Gwalior">ABV-IIITM Gwalior</option>
            <option value="IIIT Allahabad">IIIT Allahabad</option>
            <option value="IIITDM Kancheepuram Chennai">IIITDM Kancheepuram, Chennai</option>
            <option value="IIITDM Jabalpur">IIITDM Jabalpur</option>
            <option value="IIITDM Kurnool Andhra Pradesh">IIITDM Kurnool, Andhra Pradesh</option>
            <option value="IIIT Chittoor">IIIT Chittoor</option>
            <option value="IIIT Guwahati">IIIT Guwahati</option>
            <option value="IIIT Kalyani">IIIT Kalyani</option>
            <option value="IIIT Una">IIIT Una</option>
            <option value="IIIT Vadodara">IIIT Vadodara</option>
            <option value="IIIT Kota">IIIT Kota</option>
            <option value="IIIT Tiruchirappalli">IIIT Tiruchirappalli</option>
            <option value="IIIT Sonepat">IIIT Sonepat</option>
            <option value="IIIT Manipur	">IIIT Manipur	</option>
            <option value="IIIT Lucknow">IIIT Lucknow</option>
            <option value="IIIT Kottayam, Kerala">IIIT Kottayam, Kerala</option>
            <option value="IIIT Dharward">IIIT Dharward</option>
            <option value="IIIT Pune">IIIT Pune</option>
            <option value="IIIT Bhopal">IIIT Bhopal</option>
            <option value="IIIT Agartala">IIIT Agartala</option>
            <option value="IIIT Nagpur">IIIT Nagpur</option>
            <option value="IIIT Ranchi">IIIT Ranchi</option>
            <option value="IIIT Surat">IIIT Surat</option>
            <option value="IIIT Bhagalpur">IIIT Bhagalpur</option>
        </select>
        </div>

        <div class="ui checkbox" style="padding-bottom: 10px;">
            <input type="checkbox" name="" id="other_institute">
            <label>My institute is not listed here.</label>
        </div>

        <div class="field hide" id="hide">
         <label>Institute</label>
         <input type="text" name="other_institute" placeholder="Institute">
        </div>

        <div class="field">
         <label>Name*</label>
         <input type="text" name="name" placeholder="Name" required>
        </div>

        <div class="field">
         <label>Designation</label>
         <input type="text" name="designation" placeholder="Designation">
        </div>

        <div class="field">
         <label>Academic Year</label>
         <input type="text" name="acad_year" placeholder="Academic Year">
        </div>

        <div class="field">
         <label>Email*</label>
         <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="field">
         <label>Phone*</label>
         <input type="number" name="phone" placeholder="Phone" required>
        </div>

        <div class="field">
         <label>Team Name / Captain Name / Contingent Leader*</label>
         <input type="text" name="team_name" placeholder="Team Name / Captain Name / Contingent Leader" required>
        </div>

        <div class="field">
         <label>Team Size*</label>
         <input type="text" name="team_size" placeholder="Team Size" required>
        </div>

        <div class="grouped fields">
            <h3><label>Select you events*:</label></h3>
                <div class="field">
                    <div class="ui checked checkbox">
                        <input type="checkbox" id="event" name="athletics" value=1>
                        <label>Athletics</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="aquatics" value=1>
                        <label>Aquatics</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="cricket" value=1>
                        <label>Cricket</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="football" value=1>
                        <label>Football</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="volleyball" value=1>
                        <label>Volleyball</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="basketball" value=1>
                        <label>Basketball</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="badminton" value=1>
                        <label>Badminton</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="chess" value=1>
                        <label>Chess</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="carrom" value=1>
                        <label>Carrom</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="squash" value=1>
                        <label>Squash</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="table_tennis" value=1>
                        <label>Table Tennis</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="lawn_tennis" value=1>
                        <label>Lawn Tennis</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="snooker" value=1>
                        <label>Snooker</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="power_lifting" value=1>
                        <label>Power Lifting</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="pubg" value=1>
                        <label>PUBG</label>
                    </div>
                </div>

        </div>
        

      <button class="ui button" id="submit" type="submit" name="submit" value="Add" style="width:100%;">Submit</button>

     </form>
   </div>

   <?php
  include("footer.php");
?>
