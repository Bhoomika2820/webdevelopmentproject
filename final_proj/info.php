<?php
	$conn = mysqli_connect("localhost", "root", "", "committee_advertisement");
	if (isset($_POST['infoid'])) {
	$val = $_POST['infoid'];
	$res = mysqli_query($conn, "SELECT * FROM advertise_committee WHERE committee='".$val."'");
	if ($res) {
		while ($row = mysqli_fetch_array($res)) {
			echo '<label id="event_name" style="text-align:center;font-size:32px; "><strong>'.$row["event_name"].'</strong></label>
				<div id="date ">
					<label><strong>Start Date: </strong></label>
					<label id="start_date">'.$row["start_time"].'</label>
					<br>
					<label><strong>End Date: </strong></label>
					<label id="end_date">'.$row["end_time"].'</label>
				</div>
				<div>
					<label><strong>Event Category: </strong></label>
					<label id="event_category">'.$row["event_category"].'</label>
				</div>
				<div>
					<label><strong><u>Information: </u></strong></label>
					<pre id="information">'.$row["event_desc"].'</pre>
				</div>
				<div>
					<label><strong>Speaker: </strong></label>
					<label id="speaker">'.$row["host"].'</label>
				</div>
				<div>
					<label><strong><u>Contact Person</u> :</strong></label>
					<br>
					<label><strong>Name : </strong></label>
					<label id="contact_name">'.$row["contact_name"].'</label>
					<br>
					<label><strong>Phone No:</strong></label>
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