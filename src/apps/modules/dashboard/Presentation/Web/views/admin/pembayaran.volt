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
        <a type="button" class="btn" href="{{ url('dashboard/admin/home') }}">Home</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/mentor') }}">Mentor</a>
        <a type="button" class="btn" href="">Pembayaran</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/logout') }}">Sign Out</a>
    </div>
    <div class="container">      
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Mentor</th>
                    <th>Nama User</th>
                    <th>Pembayaran</th>
                    <th>Accept</th>
                </tr>
            </thead>
            <tbody>
                {% for list in pengajuan %}
                    <form method="POST">
                        <tr>
                            <input type="hidden" name="idm" value="{{ list.getIdm() }}">
                            <input type="hidden" name="email" value="{{ list.getEmail() }}">
                            <td>{{ list.getIdm() }}</td>
                            <td>{{ list.getEmail() }}</td>
                            <td><img class="buktibayar" src="{{ url(list.getBukti()) }}" style="height: 200px;"></td> 
                            <td><button type="submit" class="btn btn-primary">Accept</button> </td>
                        </tr>
                    </form>
                {% endfor %}
            </tbody>
        </table>
      </div>
</div>
{% endblock %}