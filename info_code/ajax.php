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
		var infoid = $(this).data('id');
		alert(infoid);
		$.ajax({
			method: "get",
			url: "info.php",
			data: {infoid: infoid},
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
