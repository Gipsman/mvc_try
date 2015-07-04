{% extends "Admin/admin_layout.php" %}

{% block content %}
<article>
	<div class="text-section">
		<h1>Панель администрирования</h1>
	</div>
	<ul class="states">
		{% if errorMess %}<li class="error">Error: {{errorMess}}</li>{% endif %}
		{% if warningMess %}<li class="warning">Warning: {{warningMess}}</li>{% endif %}
		{% if succesMess %}<li class="succes">Succes: {{succesMess}}</li>{% endif %}
	</ul>
	<p>
Админка...

Пока что, отобразим здесь простой текст.
Далее можно добавить в админку некоторый функционал.
Например, WYSIWYG-редактор для изменения страниц сайта (видов).
Тогда, этот вид будет содержать выпадающий список для выбора страницы, поле редактора, а также кнопку
для сохранения изменений. А некоторое действие контроллера администрирования будет описывать логику редактирования страниц.

</p>
</article>

{% endblock %}