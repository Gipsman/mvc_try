{% extends "Admin/admin_layout.php" %}

{% block content %}
<article>
	<div class="text-section">
		<h1>Новости</h1>
	</div>
	<ul class="states">
		{% if errorMess %}<li class="error">Error: {{errorMess}}</li>{% endif %}
		{% if warningMess %}<li class="warning">Warning: {{warningMess}}</li>{% endif %}
		{% if succesMess %}<li class="succes">Succes: {{succesMess}}</li>{% endif %}
	</ul>
	<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Название</td><td>Теги</td><td>ссылка</td></tr>
	
	{% if news %}
		{% for article in news %}
			<tr><td>{{article.title}}</td><td></td><td><a href="{{url.generate('adminArticle',{id: article.id})}}">Edit...</a></td></tr>
		{% endfor %}
	{% endif %}
	
</table>
</p>
</article>

{% endblock %}