{% extends "layout.php" %}


{% block title %}
{{page.title}}
{% endblock %}

{% block content %}
<h1>{{page.title}}</h1>
<div id="page-content">
{{page.content|raw}}
</div>
{% endblock %}