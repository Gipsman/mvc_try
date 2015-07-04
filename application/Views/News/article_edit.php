{% extends "layout.php" %}

{% block title %}
Новости
{% endblock %}

{% block content %}
<form method="post">
<p>
Название <br />
<textarea rows="2" cols="60" name="title">{% if article.title %}{{article.title}}{% endif %}</textarea>
</p>
<br />
<p>
Slug <br />
<input type="text" name="slug" value="{% if article.slug %}{{article.slug}}{% endif %}"/>
</p>
<br />
<p>
Контент <br />
<textarea rows="25" cols="60" name="content">{{article.content}}</textarea>
</p>
{% if article.id %}<input type="hidden" name="news_id" value="{{article.id}}"/>{% endif %}
 <input type="submit" name="save_news" value="Сохранить"/>
</form>
{% endblock %}
