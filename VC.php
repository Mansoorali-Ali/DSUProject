<?php  include 'Db.php'; ?>
<!DOCTYPE html>
<html>
<head>
       <link rel="icon" href="logo.jpg">
       <link rel="stylesheet" type="text/css" href="style.css">
	<title>Event Proforma</title>
</head>
<body>
	
       <?php 
                     $Ob =Db::ViewApplication();
                     while ($res = $Ob->fetch_object()) {
                                  
        echo " <div style='width:850px; height:auto; padding:20px; text-align:left; border: 10px solid #787878'>
<div style='width:800px; height:auto; padding:20px; text-align:left; border: 5px solid #787878'>
       <span style='font-size:40px; font-weight:bold'>DHA Suffa University Event Proforma</span>
       <br><br>
        <span style='font-size:25px'><b><i>Title of the Event:</i></b></span></b><i style='font-size:25px'>".$res ->Event_title."</i><br><br>
       <span style='font-size:25px'><b><i>Event Discription:</i></span></b><i style='font-size:25px'>".$res ->Discription."</i><br/><br/>
       <span style='font-size:25px'><b><i>Name Position & Org of Guest:</i></span></b><i style='font-size:25px'>".$res ->GuestBio."</i><br/><br/>
       <span style='font-size:25px'><b><i>Starting Dates:</i></span></b><i style='font-size:25px'>".$res ->S_Date."</i>
       <span style='font-size:25px'><b><i>Ending Dates:</i></span></b><i style='font-size:25px'>".$res ->E_Date."</i><br><br>
       <span style='font-size:25px'><b><i>Time:</i></span></b><i style='font-size:25px'>".$res ->Time."</i>
       <span style='font-size:25px'><b><i>Venue:</i></span></b><i style='font-size:25px'>".$res ->Venue."</i>
       <span style='font-size:25px'><b><i>No Of Participents:</i></span></b><i style='font-size:25px'>".$res ->No_of_P."</i><br>
       <b><span style='font-size:25px'>Assistance Required From Marketing Department</span></b><br/>
       <b><span style='font-size:25px'>A:</span></b><i style='font-size:25px'>".$res ->M_a."</i><br>
       <b><span style='font-size:25px'>B:</span></b><i style='font-size:25px'>".$res ->M_b."</i><br>
      <b> <span style='font-size:25px'>C:</span></b><i style='font-size:25px'>".$res ->M_c."</i><br>
       <b><span style='font-size:25px'>D:</span></b><i style='font-size:25px'>".$res ->M_d."</i><br>

       <b><span style='font-size:25px'>Assistance Required From IT Department</span></b><br/>
      <b> <span style='font-size:25px'>A:</span></b><i style='font-size:25px'>".$res ->IT_a."</i><br>
       <b><span style='font-size:25px'>B:</span></b><i style='font-size:25px'>".$res ->IT_b."</i><br>
       <b><span style='font-size:25px'>C:</span></b><i style='font-size:25px'>".$res ->IT_c."</i><br>
       <b><span style='font-size:25px'>D:</span></b><i style='font-size:25px'>".$res ->IT_d."</i><br>

      <b> <span style='font-size:25px'>Assistance Required From Maintenance Office</span></b><br/>
      <b> <span style='font-size:25px'>A:</span></b><i style='font-size:25px'>".$res ->MO_a."</i><br>
       <b><span style='font-size:25px'>B:</span></b><i style='font-size:25px'>".$res ->MO_b."</i><br>
       <b><span style='font-size:25px'>C:</span></b><i style='font-size:25px'>".$res ->MO_c."</i><br>
       <b><span style='font-size:25px'>D:</span></b><i style='font-size:25px'>".$res ->MO_d."</i><br>

       <b><span style='font-size:25px'>Assistance Required From Admin & Security Office</span></b><br/>
       <b><span style='font-size:25px'>A:</span></b><i style='font-size:25px'>".$res ->M_S_a."</i><br>
       <b><span style='font-size:25px'>B:</span></b><i style='font-size:25px'>".$res ->M_S_b."</i><br>
       <b><span style='font-size:25px'>C:</span></b><i style='font-size:25px'>".$res ->M_S_c."</i><br>
       <b><span style='font-size:25px'>D:</span></b><i style='font-size:25px'>".$res ->M_S_d."</i><br>
       <b><span style='font-size:25px'><i>Estimated Expenditure:</i></span></b><i>".$res ->EstimatedExpenditure."</i><br/><br/><br/><br/>
       </div>
</div>
      ";
                     }
                      ?>
      


</body>
</html>