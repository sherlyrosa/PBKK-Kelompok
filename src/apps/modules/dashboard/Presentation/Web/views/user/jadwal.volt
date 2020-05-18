{% include "layout/navbar.volt" %}
{% block navbarCont %}
    <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: white; padding-left: 4%;">
        <div class="mr-auto">
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/home') }}"  style="color: #85898A;">Home</a>
            <a class="navbar-brand active2" id="navbarA" href="{{ url('dashboard/user/submission') }}" style="color: #85898A;">Submission</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/howto') }}" style="color: #85898A;">How To</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/contactus') }}" style="color: #85898A;">Contact Us</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/mycourse') }}" style="color: #85898A;">My Course</a>
        </div>
        <div class="ml-auto" style="width: 16%; text-align: right;">
            <a class="btn" style="background-color: #26405B; color: white; padding-left: 10%; padding-right: 10%;" href="{{ url('dashboard/user/signOut') }}">Sign Out</a>
        </div>
    </nav>
    <div class="text-center" style="width: 100%; background-color: white; border-top: 2px solid #26405B; padding-top: 3%;">
        <div class="text-center" style="color: #26405B; width: 100%; margin-top: 3%;">
            <div style="margin-top: 4%;padding-bottom: 2%;">
                <form method="POST" action="{{ url('dashboard/user/addcourse') }}">
                    <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 60%;">
                        <img src="{{ url(dataMentor.getFoto()) }}" style="width: 120px;">
                    </div>
                    <p style="margin-bottom: 0; margin-top: 0;">{{ dataMentor.getNama() }}</p>
                    <p style="margin-bottom: 0; margin-top: 0;">Pengalaman: {{dataMentor.getPengalaman()}}</p>
                    <p style="margin-bottom: 0; margin-top: 0;">Mata pelajaran: </p>
                    {% set matpel = dataMentor.listMatpel() %}
                    {% for i in 0 .. (matpel|length - 1) %}
                        <a>{{matpel[i]}}</a>
                    {% endfor %}
                    {% set hari = dataMentor.listHari() %}
                    {% for i in 0 .. (hari|length - 1) %}
                        <p style="margin-bottom: 0%; margin-top: 0%;">{{hari[i]}}</p>
                        {% set jam = dataMentor.listJam(hari[i]) %}
                        {% for j in 0 .. (jam|length - 1)%}
                            <a style="margin-top: 0%; margin-bottom: 0%;">{{ jam[j] }}</a>
                        {% endfor %}
                    {% endfor %}
                    <br>
                    <input type="hidden" name="idm" value="{{ dataMentor.getId() }}">
                    <button class="btn" style="background-color: #26405B; color: white; padding: 0%; padding-left: 6%; padding-right: 6%; margin-top: 2%;">Submit</button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}