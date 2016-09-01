<?php
$pageTitle = 'Regina Tihonova | Photographer freelancer | Retoucher Freelancer';
$pageDescription = 'Im a professional freelance photographer and retoucher';
$pageKeywords = 'photographer, freelancer, freelancer photo, edit photo, photo retouching, photo editing, find freelancer';
include('layouts/header.php');
?>

  <div class="fullscreen-bg">
    <video loop muted autoplay class="fullscreen-bg__video">
        <source src="../video/video1.mp4" type="video/mp4">
    </video>
</div>
  <div id="wrapper">
    <section id="primary">
      <h3>General Information</h3>
      <p>
        You can text me here directly or on e-mail. I will answer asap! I currently live in St. Petersburg, Russia. My time zone is GMT/UTC +3 (Moscow)
      </p>
      <p id="mail-btn"><span>Text me!</span></p>
      <div id="overlay"></div>
      <!--<div id="third_section">
      <div style="float:left; clear:both">
          <?php
               if ($_GET['mail'] == 1) echo "Ваше сообщение отправлено";
          ?>
      </div>-->
<div id="popup-section">
        <form id="mail-form" action="../request.php" method="post">
          <label for="form_name" style="padding-right:3%">Name:</label>
          <input style="margin-top:5px; margin-bottom:20px; clear:right" id="form_name" type="text" name="name"><br>
          <label for="form_email">E-mail:</label>
          <input style="margin-top:5px; margin-bottom:20px" id="form_email" type="text" name="email"><br>
          <!--<label for="textarea">Message:</label>--><br>
          <textarea  style="margin-bottom:5px" id="textarea" name="message" rows="7" cols="30"></textarea><br>
          <input style="margin-top:15px; border-radius:10px" id="input_button" type="submit" name="Send/Отправить" value="Send"></form>
  </div>
    </section>
    <section id="secondary">
      <h3>Contact Details</h3>
      <ul class="contact-info">
        <li class="phone">
          <a href="tel:+79818008425">phone: +79818008425 (international)</a>
        </li>
        <li class="mail">
          <a href="mailto:vzxxl@yandex.ru">email: Tihonova_Regina@mail.ru</a>
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

<script src="../js/main.js"></script>
</body>

</html>