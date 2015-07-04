
{% extends "Admin/admin_layout.php" %}

{% block content %}
<article>
	<div class="text-section">
		<h1>Редактирование страницы</h1>
	</div>
	<ul class="states">
		{% if errorMess %}<li class="error">{{errorMess}}</li>{% endif %}
		{% if warningMess %}<li class="warning">{{warningMess}}</li>{% endif %}
		{% if succesMess %}<li class="succes">{{succesMess}}</li>{% endif %}
	</ul>
	<p>
<a href="{{url.generate('adminNews')}}">< Назад</a>
<h1>{{page.title}}</h1>
<div id="page-content">
{{page.content}}
</div>
</p>
</article>

{% endblock %}