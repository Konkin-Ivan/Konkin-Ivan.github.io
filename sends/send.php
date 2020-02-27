<meta http-equiv='refresh' content='6; url=dez-perm59@yandex.ru'>
  <meta charset="UTF-8" />
<?
if (isset ($_POST['phone'])) {
  mail ("dez-perm59@yandex.ru",
        "Новая заявка с сайта на обратный звонок".$_SERVER['HTTP_REFERER'],
        "Телефон: ".$_POST['phone']);
  echo "<center><big><em>Ваша заявка на обратный звонок принята, мы Вам перезвоним в ближайшее время!</em></big></center><a href='dez-perm59@yandex.ru'></a>"; 
}
?>