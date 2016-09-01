<?php 
$pageTitle = 'Регина Тихонова | Услуги фотограф спб';
$pageDescription = 'Немного обо мне. Я живу в Санкт-Петербурге, предоставляю услуги фотографа, а также занимаюсь обработкой фотографий: цветокоррекция, ретуш и т.д. На этой странице я рассказываю о себе';
$pageKeywords = 'фотосессия в городе спб, фотосессия на природе спб, фотограф спб дешево';
include('layouts/header.php'); 
?>
  
  <div id="wrapper">
    <div class="profile-photo-container" style="text-align: center">
      <img src="img/Regina.jpg" alt="Me" class="profile-photo"></div>
    <div id="container_about_me">
      <div class="column_about_me column_about_me_first"> 
       <h3 style="text-decoration:underline">Приветствую Вас на моем сайте!</h3>
      <p>Здравстуйте! Меня зовут Регина, и у меня есть хобби - я обожаю фотографировать! Поскольку с определенного момента хобби стало перерастать во что-то большее, и ко мне стали обращаться люди и даже другие фотографы, на свет появился этот сайт. Здесь Вы можете посмотреть некоторые примеры моих работ. Для обработки я использую преимущественно Lightroom и Photoshop. Возможно, когда я стану настоящим профи, здесь появится еще и блог. Следите за новостями ;)
      </p>
      </div>
</div>

        <?php include('layouts/footer.php'); ?>
      
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34215905 = new Ya.Metrika({
                    id:34215905,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
<div>
  <img src="https://mc.yandex.ru/watch/34215905" style="position:absolute; left:-9999px;" alt="" />
</div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>