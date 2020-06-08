<?php 
$con = new mysqli('localhost','root','','dsu_project');
class Db{
	public function EventApplication($EventTitle,$Discription,$GuestName,$StartDate,$EndDate,$Time,$Venue,$NoOfParticipent,$MarketingDept_a,$MarketingDept_b,$MarketingDept_c,$MarketingDept_d,$ITDept_a,$ITDept_b,$ITDept_c,$ITDept_d,$MentenanceOffice_a,$MentenanceOffice_b,$MentenanceOffice_c,$MentenanceOffice_d,$AdminSecurity_a,$AdminSecurity_b,$AdminSecurity_c,$AdminSecurity_d,$ExpenditureAmount,$Fileresult){
		$query ="INSERT INTO `eventapplication` (`Event_ID`, `Event_title`, `Discription`, `GuestBio`, `S_Date`, `E_Date`, `Time`, `Venue`, `No_of_P`, `M_a`, `M_b`, `M_c`, `M_d`, `IT_a`, `IT_b`, `IT_c`, `IT_d`, `MO_a`, `MO_b`, `MO_c`, `MO_d`, `M_S_a`, `M_S_b`, `M_S_c`, `M_S_d`, `EstimatedExpenditure`, `Attach_separate_sheet`) VALUES (NULL, '$EventTitle', '$Discription', '$GuestName', '$StartDate', '$EndDate', '$Time', '$Venue', '$NoOfParticipent', '$MarketingDept_a', '$MarketingDept_b', '$MarketingDept_c', '$MarketingDept_d', '$ITDept_a', '$ITDept_b', '$ITDept_c', '$ITDept_d', '$MentenanceOffice_a', '$MentenanceOffice_b', '$MentenanceOffice_c', '$MentenanceOffice_d', '$AdminSecurity_a', '$AdminSecurity_b', '$AdminSecurity_c', '$AdminSecurity_d', '$ExpenditureAmount', '$Fileresult')";
		return mysqli_query($GLOBALS['con'],$query);
	}
	public function Signup($Name,$Email,$Password,$ConformPassword){
		$query1 ="INSERT INTO `signup` (`U_ID`, `Name`, `Email`, `Password`, `CPassword`, `Status`) VALUES (NULL, '$Name', '$Email', '$Password', '$ConformPassword', '1')";
		return mysqli_query($GLOBALS['con'],$query1);
	}

	public function Login($Email,$Password){
		$query2 ="SELECT Name ,Email ,Password From Signup WHERE Email ='$Email' AND Password ='$Password'";
		return mysqli_query($GLOBALS['con'],$query2);

	}
	public function ViewApplication(){
		$query3 = "SELECT `Event_ID`, `Event_title`, `Discription`, `GuestBio`, `S_Date`, `E_Date`, `Time`, `Venue`, `No_of_P`, `M_a`, `M_b`, `M_c`, `M_d`, `IT_a`, `IT_b`, `IT_c`, `IT_d`, `MO_a`, `MO_b`, `MO_c`, `MO_d`, `M_S_a`, `M_S_b`, `M_S_c`, `M_S_d`, `EstimatedExpenditure`, `Attach_separate_sheet` FROM `eventapplication`";
		return mysqli_query($GLOBALS['con'],$query3);

	}
}
	



 ?>