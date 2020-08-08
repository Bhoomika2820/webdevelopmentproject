<?php
	$conn = mysqli_connect("localhost", "root", "", "committee_advertisement");
	if (isset($_POST['infoid'])) {
	$val = $_POST['infoid'];
	$res = mysqli_query($conn, "SELECT * FROM advertise_committee WHERE committee='".$val."'");
	if ($res) {
		while ($row = mysqli_fetch_array($res)) {
			echo '<label id="event_name" style="text-align:center; "><strong>'.$row["event_name"].'</strong></label>
				<div id="date ">
					<label>Start Date: </label>
					<label id="start_date">'.$row["start_time"].'</label>
					<br>
					<label>End Date: </label>
					<label id="end_date">'.$row["end_time"].'</label>
				</div>
				<div>
					<label>Event Category: </label>
					<label id="event_category">'.$row["event_category"].'</label>
				</div>
				<div>
					<label>Information</label>
					<label id="information">'.$row["event_desc"].'</label>
				</div>
				<div>
					<label>Speaker</label>
					<label id="speaker">'.$row["host"].'</label>
				</div>
				<div>
					<label>Contact Person</label>
					<br>
					<label>Name : </label>
					<label id="contact_name">'.$row["contact_name"].'</label>
					<br>
					<label>Phone No:</label>
					<label id="phone_no">'.$row["contact_num"].'</label>
				</div>';
		}
	}
	else {
		echo "No info";
	}
}
else {
	die("Oh snap! Server issues!!");
}
?>