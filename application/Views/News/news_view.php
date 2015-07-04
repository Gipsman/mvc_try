{% extends "layout.php" %}

{% block title %}
Новости
{% endblock %}

{% block content %}
<h1>Новости</h1>
<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Название</td><td>Cсылка</td>{% if SESSION.login_admin %}<td>edit</td>{% endif %}</tr>
	
	{% if news %}
		{% for article in news %}
			<tr><td>{{article.title}}</td><td><a href="{{url.generate('article',{slug: article.slug})}}">Подробнее...</a></td>{% if SESSION.login_admin %}<td><a href="{{url.generate('edit_news',{id: article.id})}}">Редактировать...</a></td>{% endif %}</tr>
		{% endfor %}
	{% endif %}
	
</table>

</p>
{% if SESSION.login_admin %}<a href="{{url.generate('edit_news',{id: '0'})}}">Добавить новость...</a>{% endif %}
{% endblock %}