{% extends "Admin/admin_layout.php" %}

{% block content %}
<article>
	<div class="text-section">
		<h1>Редактирование новости</h1>
	</div>
	<ul class="states">
		{% if errorMess %}<li class="error">Error: {{errorMess}}</li>{% endif %}
		{% if warningMess %}<li class="warning">Warning: {{warningMess}}</li>{% endif %}
		{% if succesMess %}<li class="succes">Succes: {{succesMess}}</li>{% endif %}
	</ul>
	<p>
<a href="{{url.generate('adminNews')}}">< Назад</a>
<h1>{{article.title}}</h1>
<div id="page-content">
{{article.content|raw}}
</div>
</p>
</article>

{% endblock %}