<meta http-equiv='refresh' content='6; url=http://beznasekomyh59.ru/'>
  <meta charset="UTF-8" />
<?
if (isset ($_POST['phone'])) {
  mail ("dez-perm59@yandex.ru",
        "Новая заявка на бесплатную консультацию или заказ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['name']."\nТелефон: ".$_POST['phone']);
  echo "<center><big><em>Ваш заявка успешно принята! Мы с Вами свяжемся в ближайшее время!</em></big></center><a href='http://beznasekomyh59.ru/'></a>"; 
}
?>