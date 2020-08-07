<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	$(document).ready(function () {
	$('.info').click(function (e) {
		document.querySelector('.bg-modal').style.display = 'block';
		e.preventDefault();
		var infoid = $(this).attr('id');
		$.ajax({
			method: "post",
			data: {infoid: infoid},
			url: "info.php",
			dataType: "html",
			success: function (response) {
				$('#displaydata').html(response);
			}
		});
	})
});
</script>
</body>
</html>
