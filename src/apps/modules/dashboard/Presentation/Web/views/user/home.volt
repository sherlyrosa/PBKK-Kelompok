{% include "layout/navbar.volt" %}
{% block navbarCont %}
    <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: white; padding-left: 4%;">
        <div class="mr-auto">
            <a class="navbar-brand active2" id="navbarA" href="#" style="color: #85898A;">Home</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/submission') }}" style="color: #85898A;">Submission</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/howto') }}" style="color: #85898A;">How To</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/contactus') }}" style="color: #85898A;">Contact Us</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/mycourse') }}" style="color: #85898A;">My Course</a>
        </div>
        <div class="ml-auto" style="width: 16%; text-align: right;">
            <a class="btn" style="background-color: #26405B; color: white; padding-left: 10%; padding-right: 10%;" href="{{ url('dashboard/user/signOut') }}">Sign Out</a>
        </div>
    </nav>
    <div class="d-flex" style="width: 100%; background-color: #26405B;">
        <div style="width: 70%;">
            <img src="{{ url("home.JPG") }}" style="width: 100%;">
        </div>
        <div class="text-center" style="width: 30%;">
            <div class="ml-auto mr-auto" style="margin-top: 30%; width: 72%;">
                <h1 style="color: #F1DBC4; font-size: 6vw; text-align:center;">Cerdazz</h1>
                <h5 style="color: white; margin-top: 18%; margin-bottom: 24%; font-size: 22px;">Your child's future starts here</h5>
                <p style="color: white; text-align: left; font-size: 16px;">Welcome to our website, where you can find trustworthy and affordable plans for best education you ever need. Take a look at our quality mentor and enjoy your course with Cerdazz. Get in touch if you have any question.</p>
            </div>
        </div>
    </div>
{% endblock %}