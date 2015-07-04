<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    {% block stylesheet %}
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">
    {% endblock stylesheet %}
    </head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="first active"><a href="{{url.generate('homepage')}}">Главная</a></li>
              <li><a href="{{url.generate('staticPage',{slug: 'services'})}}">Услуги</a></li>
              <li><a href="/news">Новости</a></li>
              <li class="last"><a href="{{url.generate('staticPage',{slug: 'contacts'})}}">Контакты</a></li>
            </ul>       
            {{this.render('Controller_User:action_auth')}} 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>                 

    <div class="container">        
        <div id="content">
            {% block content %}
            {% endblock content %}
        </div>
        <br class="clearfix" />
        <hr>
        <footer>
          <p>&copy; Company 2012</p>
        </footer>
    </div>
    {% block javasript %}        
    <script src="/assets/js/jquery.js"></script>
    {% endblock javasript %}           
</body>
</html>