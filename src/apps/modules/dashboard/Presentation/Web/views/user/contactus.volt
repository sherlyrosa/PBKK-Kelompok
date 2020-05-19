{% include "layout/navbar.volt" %}
{% block navbarCont %}
    <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: white; padding-left: 4%;">
        <div class="mr-auto">
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/home') }}" style="color: #85898A;">Home</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/submission') }}" style="color: #85898A;">Submission</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/howto') }}" style="color: #85898A;">How To</a>
            <a class="navbar-brand active2" id="navbarA" href="#" style="color: #85898A;">Contact Us</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/mycourse') }}" style="color: #85898A;">My Course</a>
        </div>
        <div class="ml-auto" style="width: 16%; text-align: right;">
            <a class="btn" style="background-color: #26405B; color: white; padding-left: 10%; padding-right: 10%;" href="{{ url('dashboard/user/signOut') }}">Sign Out</a>
        </div>
    </nav>
    <div class="d-flex" style="width: 100%; background-color: white; border-top: 2px solid #26405B; padding-top: 3%;">
        <div class="d-flex justify-content-center align-items-center"style="width: 60%;">
            <img src="{{ url("PngItem_606369.png") }}" style="width: 100%;">
        </div>
        <div class="d-flex align-items-center" style="width: 50%; color: #26405B;">
            <div class="ml-auto mr-auto" style="margin-top: 5%; width:52%; text-align:center;">
                <h1 style="font-size: 4vw">Contact Us</h1>
                <h6 style="margin-top: 12%; margin-bottom: 10%; font-size: 28px;">Hai, Ada Pertanyaan? Silahkan Hubungi Kontak Dibawah ini.</h6>
                <h6 style="font-size: 24px;">cerdazzz@email.com</h6>
            </div>
        </div>
    </div>
{% endblock %}