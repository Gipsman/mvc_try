{% if this.getSession.login_admin %}
Вы вошли как {{ this.getSession.login_admin }}.  <a href="{{url.generate('adminLogout')}}">Выйти.</a>
{% else %}
<form class="navbar-form pull-right" method="post">
    <input class="span2" type="text" name="username" placeholder="username">
    <input class="span2" type="password" name="password" placeholder="password">
    <button type="submit" class="btn">Войти</button>
</form>
{% endif %}

