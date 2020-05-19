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
    <div class="text-center" style="width: 100%; background-color: #26405B; border-top: 2px solid #26405B; padding-top: 10%; padding-bottom: 10%;">
        <div class="container text-center" style="background-color: white; padding-bottom: 3%;">
            <h2 style="padding-top: 3%; padding-bottom: 3%;">Pembayaran</h2>
            <p class="ml-auto mr-auto" style="width: 70%;">Terima kasih telah melakukan pengajuan mentor, silahkan melakukan pembayaran pada BNI 055123 an Cerdazzz Unggah bukti pembayaran agar transaksi anda dapat kami proses.</p>
            <form method="POST" enctype="multipart/form-data" style="margin-top: 5%;">
                <input type="file" name="bukti">
                <button class="btn" style="background-color: #26405B; color: white;">Unggah</button>
            </form>
        </div>
    </div>
{% endblock %}