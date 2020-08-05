$(document).ready(function () {
	$('#info').click(function (e) {
		document.querySelector('.bg-modal').style.display = 'block';
		e.preventDefault();
		$.ajax({
			method: "post",
			url: "info.php",
			data: $('.bg-modal').serialize(),
			dataType: "html",
			success: function (response) {
				$('#displaydata').html(response);
			}
		});
	})
});