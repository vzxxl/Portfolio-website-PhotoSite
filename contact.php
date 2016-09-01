<?php 
$pageTitle = 'Регина Тихонова | Заказать фотографа спб';
$pageDescription = 'Мои контакты. Как со мной связаться, чтобы заказать фотосессию в спб или обработку фотографий';
$pageKeywords = 'фотограф спб, фотосессия в спб, обработка фото купить, семейная фотосессия в спб, обработка фото услуги, фотосессия в детском саду';
include('layouts/header.php'); 
?>


  <div class="fullscreen-bg">
    <video loop muted autoplay class="fullscreen-bg__video">
        <source src="video/video1.mp4" type="video/mp4">
    </video>
</div>
  <div id="wrapper">
    <section id="primary">
      <h3>Как со мной связаться</h3>
      <p>
        Лучше всего написать мне подробно со всеми предпочтениями по съемке и времени! Можете писать прямо на сайте, либо в социальных сетях. Если вопрос срочный - можете позвонить!
        <hr></p>
     
      <p id="mail-btn"><span>Написать мне!</span></p>
      <div id="overlay"></div>
      <!--<div id="third_section">
      <div style="float:left; clear:both">
          <?php
               if ($_GET['mail'] == 1) echo "Ваше сообщение отправлено";
          ?>
      </div>-->
<div id="popup-section">
        <form id="mail-form" action="request.php" method="post">
          <label for="form_name" style="padding-right:5%">Имя:</label>
          <input style="margin-top:5px; margin-bottom:20px; clear:right" id="form_name" type="text" name="name"><br>
          <label for="form_email">E-mail:</label>
          <input style="margin-top:5px; margin-bottom:20px" id="form_email" type="text" name="email"><br>
          <!--<label for="textarea">Message:</label>--><br>
          <textarea  style="margin-bottom:5px" id="textarea" name="message" rows="7" cols="30"></textarea><br>
          <input style="margin-top:15px; border-radius:10px" id="input_button" type="submit" name="Send/Отправить" value="Отправить"></form>
  </div>
    </section>
    <section id="secondary">
      <h3>Contact Details</h3>
      <ul class="contact-info">
        <li class="phone">
          <a href="tel:+79818008425">тел.: +79818008425</a>
        </li>
        <li class="mail">
          <a href="mailto:vzxxl@yandex.ru">почта: Tihonova_Regina@mail.ru</a>
        </li>
        <li class="instagram">
          <a href="http://instagram.com/tihonova_regina" target="_blank">/tihonova_regina</a>
        </li>
      </ul>
    </section>

  <!--<section id="third_section">
      <div style="float:left; clear:both">
          <?php
               if ($_GET['mail'] == 1) echo "Ваше сообщение отправлено";
          ?>
      </div>
        <form id="form_for_message" action="request.php" method="post">
          <label for="form_name">Name:</label>
          <input style="margin-top:5px; margin-bottom:20px; clear:right" id="form_name" type="text" name="name"><br>
          <label for="form_email">E-mail:</label>
          <input style="margin-top:5px; margin-bottom:20px" id="form_email" type="text" name="email"><br>
          <label for="textarea">Message:</label><br>
          <textarea  style="margin-bottom:5px" id="textarea" name="message" rows="10" cols="30"></textarea><br>
          <input style="margin-top:15px; border-radius:10px" id="input_button" type="submit" name="Send/Отправить"></form>
      </section>-->

      <div id="border_fixer" style="display:block; height: 500px"></div>
    
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
<noscript><div><img src="https://mc.yandex.ru/watch/34215905" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="js/main.js"></script>
</body>

</html>