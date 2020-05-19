{% include "layout/navbar.volt" %}
{% block navbarCont %}
    <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: white; padding-left: 4%;">
        <div class="mr-auto">
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/home') }}"  style="color: #85898A;">Home</a>
            <a class="navbar-brand active2" id="navbarA" href="#" style="color: #85898A;">Submission</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/howto') }}" style="color: #85898A;">How To</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/contactus') }}" style="color: #85898A;">Contact Us</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/mycourse') }}" style="color: #85898A;">My Course</a>
        </div>
        <div class="ml-auto" style="width: 16%; text-align: right;">
            <a class="btn" style="background-color: #26405B; color: white; padding-left: 10%; padding-right: 10%;" href="{{ url('dashboard/user/signOut') }}">Sign Out</a>
        </div>
    </nav>
    <div class="text-center" style="width: 100%; background-color: white; border-top: 2px solid #26405B; padding-top: 3%;">
        <h2 style="color: #26405B;">Choose Your Course Plan</h2>
        <div class="d-flex justify-content-center" style="color: #26405B; width: 100%; margin-top: 3%;">
            <div id="paketBox">
                <form method="POST" action="{{ url('dashboard/user/pilihmentor') }}">
                    <input type="hidden" name="pertemuan" value="3">
                    <input type="hidden" name="harga" value="150000">
                    <div style="border-bottom: 1px solid lightgray; padding: 15%;" id="hov">
                        <h6>Paket A</h6>
                        <div class="d-flex justify-content-center">
                            <p>Rp</p>
                            <h1>150.000</h1>
                        </div>
                        <p style="font-size: 14px;">Every month</p>
                        <button class="btn" style="background-color: #C4A384; color: white; width: 100%;">Select</button>
                    </div>
                    <div style="margin-top: 7%;">
                        <p>3 kali pertemuan</p>
                    </div>
                </form>
            </div>
            <div id="paketBox">
                <a class="btn-sm" style="position: absolute;margin-top: -1%; margin-left: -3%; background-color: #26405B; color: white;">Best Value</a>
                <form method="POST" action="{{ url('dashboard/user/pilihmentor') }}">
                    <input type="hidden" name="pertemuan" value="6">
                    <input type="hidden" name="harga" value="250000">
                    <div style="border-bottom: 1px solid lightgray; padding: 15%;" id="hov">
                        <h6>Paket B</h6>
                        <div class="d-flex justify-content-center">
                            <p>Rp</p>
                            <h1>250.000</h1>
                        </div>
                        <p style="font-size: 14px;">Every month</p>
                        <button class="btn" style="background-color: #C4A384; color: white; width: 100%;">Select</button>
                    </div>
                    <div style="margin-top: 7%;">
                        <p>6 kali pertemuan</p>
                    </div>
                </form>
            </div>
            <div id="paketBox">
                <form method="POST" action="{{ url('dashboard/user/pilihmentor') }}">
                    <input type="hidden" name="pertemuan" value="9">
                    <input type="hidden" name="harga" value="450000">
                    <div style="border-bottom: 1px solid lightgray; padding: 15%;" id="hov">
                        <h6>Paket C</h6>
                        <div class="d-flex justify-content-center">
                            <p>Rp</p>
                            <h1>450.000</h1>
                        </div>
                        <p style="font-size: 14px;">Every month</p>
                        <button class="btn" style="background-color: #C4A384; color: white; width: 100%;">Select</button>
                    </div>
                    <div style="margin-top: 7%;">
                        <p>9 kali pertemuan</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}