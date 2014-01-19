
<?php
$con=mysqli_connect("127.0.0.1","root","310813","costumer");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO crm (name, email)
VALUES
('$_POST[name]','$_POST[email]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Language" content="ru">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Obereg</title>
    <meta name="keywords" content="безопасность дома, охрана, сигнализация, тепловизор, мониторинг, видеонаблюдение">
    <meta name="Tony" content="Obereg">
    <link href="fav.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22607116 = new Ya.Metrika({id:22607116,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22607116" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="logo">
    <img src="images/logo.png"></img>
</div>
<div id="top">

    <div id="img_obereg">
        <img src="images/big_keeper.png"/>
    </div>
    <div id="text">
        <h1>Тепловизионый гаджет "Оберег" </br>на страже вашего дома.</h1>
        <h3>Предупредит о проблемах с электроприборами, пожаре или проникновении.
            Позволит контролировать помещение, пока вас нет дома, через интернет прямо со своего мобильного
            телефона или с нашего сайта.</h3>
        <h1 id="sale">$150<br/>Спасибо, мы свяжемся с вами!</h1>        
    </div>
</div>
<div id="room">

    <table>
        <tr>
            <td id="td1"></td>
            <td id="td2"></td>
            <td id="td3"></td>
        </tr>
        <tr>
            <td><h2>Простая настройка</h2><h3>Все что нужно - это зайти на сайт www.obereg.com и активировать,указав свой номер телефона</h3></td>
            <td><h2>Удобное оповещение</h2><h3>На ваш телефон придет фотоизвещение, и даже если у вас не ловит интернет, вас известят по средствам SMS</h3></td>
            <td><h2>Компактный и стильный</h2><h3>Занимает мало места, легко впишется в любой интерьер</h3></td>
        </tr>
    </table>
</div>
<div id="footer">
     <table> <tr><td><h1>Собрано </h1></td><td  id="count"><h1>
	 <?php
/* Открыть соединение */
$link = mysqli_connect("127.0.0.1","user","pass","dbname");

/* Проверить соединение */
if (mysqli_connect_errno()) {
    printf("Ошибка соединения: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT email FROM crm";
if ($stmt = mysqli_prepare($link, $query)) {

    /* Выполнить запрос */
    mysqli_stmt_execute($stmt);

    /* Сохранить результат */
    mysqli_stmt_store_result($stmt);

    printf(mysqli_stmt_num_rows($stmt));

    /* Закрыть выражение */
    mysqli_stmt_close($stmt);
}

/* Закрыть соединение */
mysqli_close($link);
?>
	 </h1></td> <td> <H1> предзаказов</H1></td></tr></table>
</div>
</body>
</html>
