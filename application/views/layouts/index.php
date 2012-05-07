<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Russian BarCamp @ CNX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Встреча русскоязычных ИТишников проживающих в юго-восточной Азии, Чиангмай, Таиланд, 27 мая">
    <meta name="author" content="MpaK - http://mrak7.com Design4Underground">
    <meta name='loginza-verification' content='3508f43ec07420b99214cfb6871d57d6' />

    <link href="/static/bootstrap/css/bootstrap.ameli.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/jquery.pnotify.default.css">
    <link rel="stylesheet" type="text/css" href="/css/flash.css">
    <link type="text/css" href="/css/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">Russian BarCamp @ CNX // 27 мая, Чиангмай, Таиланд</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/">Присоединиться</a></li>
              <li><a href="/who">Участники</a></li>
              <li><a href="/about">Программа</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <img src="/imgs/logo_transp.png" alt="Русскоязычный BarCamp в Чиангмае" style="margin:15px 0px 20px 0px"/>
	  <?= $content ?>
      <hr>

      <footer>
<noindex>
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="float:right;">
		<a class="addthis_button_facebook"></a>
		<a class="addthis_button_twitter"></a>
		<a class="addthis_button_vk"></a>
		<a class="addthis_button_livejournal"></a>
		<a class="addthis_button_odnoklassniki_ru"></a>
		<a class="addthis_button_mymailru"></a>
		<a class="addthis_button_google_plusone"  g:plusone:count="false"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=mpak999"></script>
</noindex>

        <p>&copy; CNX, Thailand 2012 | <a href="http://mrak7.com">DESIGN4<b>UNDERGROUND</b></a></p>

      </footer>

    </div>

    <script src="/js/jquery-1.7.2.min.js"></script>

    <script  type="text/javascript" src="/js/jquery.pnotify.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.8.19.custom.min.js"></script>

	<?=get_flash();?>

<noindex>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter14248450 = new Ya.Metrika({id:14248450,
                    accurateTrackBounce:true});
        } catch(e) {}
    });
    
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/14248450" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</noindex>
  </body>
</html>
