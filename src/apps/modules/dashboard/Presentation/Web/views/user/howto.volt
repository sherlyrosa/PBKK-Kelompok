{% include "layout/navbar.volt" %}
{% block navbarCont %}
    <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: white; padding-left: 4%;">
        <div class="mr-auto">
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/home') }}" style="color: #85898A;">Home</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/submission') }}" style="color: #85898A;">Submission</a>
            <a class="navbar-brand active2" id="navbarA" href="#" style="color: #85898A;">How To</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/contactus') }}" style="color: #85898A;">Contact Us</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/mycourse') }}" style="color: #85898A;">My Course</a>
        </div>
        <div class="ml-auto" style="width: 16%; text-align: right;">
            <a class="btn" style="background-color: #26405B; color: white; padding-left: 10%; padding-right: 10%;" href="{{ url('dashboard/user/signOut') }}">Sign Out</a>
        </div>
    </nav>
    <div class="text-center" style="width: 100%; background-color: #26405B; padding-top: 5%; padding-bottom: 1%;">
        <div class="d-flex justify-content-center" style="margin-bottom: 3%; color: white;">
            <div style="width: 30%;">
                <img src="{{ url('how-paket.jpg') }}" id="howtoImg">
                <p class="ml-auto mr-auto" style="text-align: left; font-size: 18px; width: 46%;">Pilih paket yang sesuai dengan budget anda</p>
            </div>
            <div style="width: 30%;">
                <img src="{{ url('how-mentor.jpg') }}" id="howtoImg">
                <p class="ml-auto mr-auto" style="text-align: left; font-size: 18px; width: 46%;">Pilih mentor yang anda inginkan</p>
            </div>
            <div style="width: 30%;">
                <img src="{{ url('how-calendar.jpg') }}" id="howtoImg">
                <p class="ml-auto mr-auto" style="text-align: left; font-size: 18px; width: 46%;">Pilih jadwal yang sesuai dengan waktu anda</p>
            </div>
        </div>
        <div class="d-flex justify-content-center" style="color: white;">
            <div style="width: 30%;">
                <img src="{{ url('how-buku.jpg') }}" id="howtoImg">
                <p class="ml-auto mr-auto" style="text-align: left; font-size: 18px; width: 46%;">Pilih mata pelajaran yang anda butuhkan</p>
            </div>
            <div style="width: 30%;">
                <img src="{{ url('how-bayar.jpg') }}" id="howtoImg">
                <p class="ml-auto mr-auto" style="text-align: left; font-size: 18px; width: 46%;">Lakukan pembayaran dan unggah buktinya</p>
            </div>
            <div style="width: 30%;">
                <img src="{{ url('how-grad.jpg') }}" id="howtoImg">
                <p class="ml-auto mr-auto" style="text-align: left; font-size: 18px; width: 46%;">Dapathkan hasil terbaik untuk anak anda</p>
            </div>
        </div>
    </div>
{% endblock %}