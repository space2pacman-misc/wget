<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<title>WGET</title>
<script>
function AjaxFormRequest(result,formMain,url) {
            $.ajax({
                url:     url,
                type:     "POST",
                dataType: "html",
                data: jQuery("#"+formMain).serialize(),
                success: function(response) {
					$(result).html(response);
					$(result).addClass("message-result_visible_success");
					//$(result).show(0).delay(5000).hide(0);
				},
				error: function(response) {
					$(result).html("<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>");
				}
			});

			$(':input','#formMain')
				.not(':button, :submit, :reset, :hidden')
				.val('')
				.removeAttr('checked')
				.removeAttr('selected');
}
</script>
</head>
<body>
<video preload="auto" autoplay="" loop="" width="100%" class="video">
	<source src="/video/video.mp4">
	<source src="/video/video.ogv">
</video>
	<div class="container">
		<h1>Бесплатное скачивание сайта</h1>
		<div class="input-url">
			<form method="post" action="" id="formMain" name="formMain" class="input-url__form">
				<input type="text" class="input-url__input" name="url" placeholder="http://">
				<input type="button"  value="Скачать" onclick="AjaxFormRequest('.message-result', 'formMain', 'download.php')" class="input-url__button">
			</form>
			<div class="message-result"></div>
		</div>
		<div class="progress">
			<div class="progress__bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
		</div>
	</div>
	<div class="footer">me@yaroslav-i.ru</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>
