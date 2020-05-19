<!DOCTYPE html>
<html {% block htm %} {% endblock %}>
<head>
    {% include "layout/header.volt" %}
    {% block styl %} {% endblock %}
</head>
<body {% block bod %} {% endblock %}>
    {% block navbarCont %} {% endblock %}
    {% block content %} {% endblock %}    
</body>
    {% include "layout/js.volt" %}
</html>
