<?php
if($_POST) {
	$url = $_POST["url"];
	$actual_link = "http://$_SERVER[HTTP_HOST]";
	exec("wget -r -l10 -k -p -E -nc -P ".getcwd()."/tmp ".$url."", $output, $return);
	if (!$return) {
		exec('zip -r tmp/'.$url.'.zip tmp/'.$url.' ');
		echo "Сайт успешно скопирован. <a href='"; echo ($actual_link.'/tmp/'.$url.'.zip'); echo"'>Скачать</a>";
	} else {
		echo "Ошибка, попробуйте еще раз.";
	}
}
?>