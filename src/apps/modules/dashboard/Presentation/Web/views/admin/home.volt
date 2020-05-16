{% extends "layout/base.volt" %}
{% block htm %}{% endblock %}
{% block styl %}{% endblock %}
{% block bod %}
{% endblock %}
{% block content %}

<div class="text-center">
    <div class="logocoba">
        <img src="{{ url("public/logo1.JPG") }}">
    </div>
    <div class="navbarcoba">
        <a type="button" class="btn" href="">Home</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/mentor') }}">Mentor</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/pembayaran') }}">Pembayaran</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/logout') }}">Sign Out</a>
    </div>
    <div class="konten1coba">
        <img class = "cerdas1" src="{{ url("public/3.JPG") }}">
        <p class="your">Your Smart Choice</p>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url("public/Adult Students.jpg") }}" alt="First slide" >
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ url("public/Graduation Caps.JPG") }}" alt="Second slide">
            </div>
        </div>
    </div>
</div>
{% endblock %}