{% extends "layout.php" %}

{% block title %}
Новости
{% endblock %}

{% block content %}
<h1>{{article.title}}</h1>
<p>
{{article.content|raw}}
</p>
{% endblock %}