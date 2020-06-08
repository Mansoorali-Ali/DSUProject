<?php include 'Db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="icon" href="logo.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<h1 align="center"><b>DHA SUFFA UNIVERSITY EVENT ORGANIZING PROFORMA TABLE</b></h1>
	<div class="container">
	<table border="2px">
			<tr><th>Application ID</th>
				<th>Title of Event</th>
				<th>Discription of Event</th>
				<th>Name Position & Org of Guest</th>
				<th>Starting Date</th>
				<th>Ending Date</th>
				<th>Time</th>
				<th>Venue</th>
				<th>No of Participent</th>
				<th>Marketing Department a</th>
				<th>Marketing Department b</th>
				<th>Marketing Department c</th>
				<th>Marketing Department d</th>
				<th>IT Department a</th>
				<th>IT Department b</th>
				<th>IT Department c</th>
				<th>IT Department d</th>
				<th>Maintenance Office a</th>
				<th>Maintenance Office b</th>
				<th>Maintenance Office c</th>
				<th>Maintenance Office d</th>
				<th>Admin & Security Office a</th>
				<th>Admin & Security Office b</th>
				<th>Admin & Security Office c</th>
				<th>Admin & Security Office d</th>
				<th>Estimated Expenditur</th>
				<th>Attached separate sheet </th>
				<th>Approve</th>
				<th>Reject</th>
			</tr>
			<?php 
			$Ob =Db::ViewApplication();
			while ($res = $Ob->fetch_object()) {
					echo "<tr>
							<td>".$res ->Event_ID."</td>
							<td>".$res ->Event_title."</td>
							<td>".$res ->Discription."</td>
							<td>".$res ->GuestBio."</td>
							<td>".$res ->S_Date."</td>
							<td>".$res ->E_Date."</td>
							<td>".$res ->Time."</td>
							<td>".$res ->Venue."</td>
							<td>".$res ->No_of_P."</td>
							<td>".$res ->M_a."</td>
							<td>".$res ->M_b."</td>
							<td>".$res ->M_c."</td>
							<td>".$res ->M_d."</td>
							<td>".$res ->IT_a."</td>
							<td>".$res ->IT_b."</td>
							<td>".$res ->IT_c."</td>
							<td>".$res ->IT_d."</td>
							<td>".$res ->MO_a."</td>
							<td>".$res ->MO_b."</td>
							<td>".$res ->MO_c."</td>
							<td>".$res ->MO_d."</td>
							<td>".$res ->M_S_a."</td>
							<td>".$res ->M_S_b."</td>
							<td>".$res ->M_S_c."</td>
							<td>".$res ->M_S_d."</td>
							<td>".$res ->EstimatedExpenditure."</td>
							<td>".$res ->Attach_separate_sheet."</td>
						<td><a href='deletes.php?id=$id' class='btn btn-danger'>Delete</a></td>	
						</tr>";
			}
			 ?>

	</table>
</div>
</body>
</html>