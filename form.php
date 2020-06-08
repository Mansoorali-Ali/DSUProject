<?php include 'Db.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="logo.jpg">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<h2>DHA SUFFA UNIVERSITY EVENT ORGANIZING PROFORMA</h2>

    <div class="container">
    
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
        <label class="form-control col-lg-12"><b>Title of Event</b></label><br>
      <input class="form-control col-lg-12" type="text" placeholder="Title of Event" name="Etitle" required>
      </div>
      <div class="row">
         <label  class="form-control col-lg-12"><b>Discription of Event</b></label>
      <textarea class="form-control col-lg-12" placeholder="Please write the brief discription of the event" name="Discription" required></textarea>

      </div>
       <div class="row">
        <label  class="form-control col-lg-12"><b>Name. Position & Org of Guest Speaker</b></label>
      <input  class="form-control col-lg-12" type="text" placeholder="Name. Position & Org of Guest Speaker" name="GName" required>
      </div>
       <div class="row">

      <label  class="form-control col-lg-12"><b>Start Date</b></label>
      <input  class="form-control col-lg-12" type="Date" placeholder="Start Date" name="Sdate" required>

      </div>
       <div class="row">

      <label  class="form-control col-lg-12"><b>End Date</b></label>
      <input  class="form-control col-lg-12" type="Date" placeholder="End Date" name="Edate" required>
      </div>
       <div class="row">

      <label  class="form-control col-lg-12"><b>Time</b></label>
      <input  class="form-control col-lg-12" type="time" placeholder="Time" name="time" required><br>
      </div>
       <div class="row">
         <label  class="form-control col-lg-12"><b>Venue</b></label>
      <input  class="form-control col-lg-12" type="text" placeholder="Venue" name="venue" required>
      </div>
       <div class="row">

      <label  class="form-control col-lg-12"><b>No of Participants </b></label>
      <input  class="form-control col-lg-12" type="number" placeholder="No of Participants " name="NoofP" required>
      </div>
      
     <label  class="form-control col-lg-12""><b>ASSISTANCE REQUIRED</b></label>
    <button  class="btn btn-primary ,form-control col-lg-12" id="ftgl">Marketing Department</button>
  <div id="di">
      <input  class="form-control col-lg-12" type="text" placeholder="a" name="M_a">
      <input  class="form-control col-lg-12" type="text" placeholder="b" name="M_b" >
      <input  class="form-control col-lg-12" type="text" placeholder="c" name="M_c" >
      <input  class="form-control col-lg-12" type="text" placeholder="d" name="M_d" >
    
  </div>
   <button  class="btn btn-primary ,form-control col-lg-12"   id="ftg2">IT Department </button>
  <div id="di1">
      <input  class="form-control col-lg-12" type="text" placeholder="a" name="IT_a" >
      <input  class="form-control col-lg-12" type="text" placeholder="b" name="IT_b" >
      <input  class="form-control col-lg-12" type="text" placeholder="c" name="IT_c" >
      <input  class="form-control col-lg-12" type="text" placeholder="d" name="IT_d" >
    
  </div>
   <button class="btn btn-primary ,form-control col-lg-12" id="ftg3">Maintenance Office </button>
  <div id="di2">
      <input  class="form-control col-lg-12" type="text" placeholder="a" name="MO_a" >
      <input  class="form-control col-lg-12" type="text" placeholder="b" name="MO_b" >
      <input  class="form-control col-lg-12" type="text" placeholder="c" name="MO_c" >
      <input  class="form-control col-lg-12" type="text" placeholder="d" name="MO_d" >
    
  </div>
   <button class="btn btn-primary ,form-control col-lg-12" id="ftg4">Admin & Security Office </button>
  <div id="di3">
      <input  class="form-control col-lg-12" type="text" placeholder="a" name="AS_a" >
      <input  class="form-control col-lg-12" type="text" placeholder="b" name="AS_b" >
      <input  class="form-control col-lg-12" type="text" placeholder="c" name="AS_c" >
      <input  class="form-control col-lg-12" type="text" placeholder="d" name="AS_d" >
    </div>
     <script type="text/javascript" src="jquery.js"></script>
     <script type="text/javascript" src="effects.js"></script>

      <label  class="form-control col-lg-12"><b>Estimated Expenditure</b></label>
       <input  class="form-control col-lg-12" type="number" placeholder="Please indicate estimated amount" name="amount" width="900px;">
       <label  class="form-control col-lg-12"><b>Attach separate sheet indicating details, if required</b></label>
       <input  class="btn btn-dark ,form-control col-lg-12" type='file' name='file'>
        <br><br>
        <input  class="btn btn-success ,form-control col-lg-12" type='submit' name='submit'>


  </form>
  </div>
  <?php 
        if (isset($_POST['submit'])) {
        $EventTitle=$_POST['Etitle'];
        $Discription=trim($_POST['Discription']);
        $GuestName=$_POST['GName'];
        $StartDate=$_POST['Sdate'];
        $EndDate=$_POST['Edate'];
        $Time=$_POST['time'];
        $Venue=$_POST['venue'];
        $NoOfParticipent=$_POST['NoofP'];
        $MarketingDept_a=$_POST['M_a'];
        $MarketingDept_b=$_POST['M_b'];
        $MarketingDept_c=$_POST['M_c'];
        $MarketingDept_d=$_POST['M_d'];
        $ITDept_a=$_POST['IT_a'];
        $ITDept_b=$_POST['IT_b'];
        $ITDept_c=$_POST['IT_c'];
        $ITDept_d=$_POST['IT_d'];
        $MentenanceOffice_a=$_POST['MO_a'];
        $MentenanceOffice_b=$_POST['MO_b'];
        $MentenanceOffice_c=$_POST['MO_c'];
        $MentenanceOffice_d=$_POST['MO_d'];
        $AdminSecurity_a=$_POST['AS_a'];
        $AdminSecurity_b=$_POST['AS_b'];
        $AdminSecurity_c=$_POST['AS_c'];
        $AdminSecurity_d=$_POST['AS_d'];
        $ExpenditureAmount=$_POST['amount'];
        #$ExpenditureFile=$_POST['file']

        $FileName = $_FILES['file']['name'];
        $FileType = $_FILES['file']['type'];
        $FileTmp = $_FILES['file']['tmp_name'];
        $FileError = $_FILES['file']['error'];
        $FileSize = $_FILES['file']['size'];
        $Fileresult;
        $FileExt = explode('.', $FileName);
        $FileActExt = strtolower(end($FileExt));
        $allowed = array("jpg","jpeg","png","pdf","text","doc","csv");

        if(in_array($FileActExt,$allowed))
        {if($FileError === 0)
          {if($FileSize <= 100000000000000000)
            {$FileNewName = uniqid().".".$FileActExt;
              $Fileresult   = 'uploads/'.$FileNewName;
                move_uploaded_file($FileTmp, $Fileresult);}
            else
            {$Fileresult = "your file size is big";}}
          else
          {$Fileresult = "your file contains Errors";}}
        else
        {$Fileresult = "your file contains invalid extension";}

      Db::EventApplication($EventTitle,$Discription,$GuestName,$StartDate,$EndDate,$Time,$Venue,$NoOfParticipent,$MarketingDept_a,$MarketingDept_b,$MarketingDept_c,$MarketingDept_d,$ITDept_a,$ITDept_b,$ITDept_c,$ITDept_d,$MentenanceOffice_a,$MentenanceOffice_b,$MentenanceOffice_c,$MentenanceOffice_d,$AdminSecurity_a,$AdminSecurity_b,$AdminSecurity_c,$AdminSecurity_d,$ExpenditureAmount,$Fileresult);
}



   ?>
    
</body>
</html>
