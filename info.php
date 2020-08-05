<?php
	$conn = mysqli_connect("localhost", "root", "", "site");
	$res = mysqli_query($conn, "SELECT * FROM candidate_visible");
	if ($res) {
		while ($row = mysqli_fetch_array($res)) {
			echo "<script>img = document.getElementById(".$row['title'].".toString()); console.log(img.id)</script>";
			echo '<label id="event_name " style="text-align:center; "><strong>Event Name</strong></label>
			<div id="date ">
				<label>Start Date: </label>
				<label id="start_date">'.$row["start_time"].'</label>
				<br>
				<label>End Date: </label>
				<label id="end_date "></label>
			</div>
			<div>
				<label>Event Category: </label>
				<label id="event_category "></label>
			</div>
			<div>
				<label>Information</label>
				<label id="information "></label>
			</div>
			<div>
				<label>Speaker</label>
				<label id="speaker "></label>
			</div>
			<div>
				<label>Contact Person</label>
				<br>
				<label>Name : </label>
				<label id="contact_name "></label>
				<br>
				<label>Phone No:</label>
				<label id="phone_no "></label>
			</div>';
		}
	}
	else {
		echo "No info";
	}
?>