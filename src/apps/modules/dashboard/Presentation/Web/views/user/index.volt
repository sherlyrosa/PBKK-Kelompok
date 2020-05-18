{% include "layout/navbar.volt" %}
{% block content %}
    <img src="{{ url('grad-cap.JPG') }}" style="width: 100%; height: auto;">
    <div style="background-color: #26405B; padding-bottom: 4%; padding-top: 4%;">
        <div class="container text-center">
            <h2 class="mb-4" style="color: #F1DBC4">About Us</h2>
            <div class="ml-auto mr-auto mb-5" style="width: 68%; color: white;">
                <p style="margin-bottom: 4%;">Cerdazz is your solution to make your child smarter without fear of fraud and a schedule that matches your desires. You can choose the package according to the budget but still get quality and reliable.</p>
                <p>Our vision is fast-paced, forward-thinking and brain-centered at its core, and all of our mentor reflect these ideals. We invite you to browse our site to find just what you have been looking for. Do smart, feel smart, join Cerdazz today.</p>
            </div>
            <button class="btn" style="background-color: #F1DBC4" data-toggle="modal" data-target="#exampleModal">Sign Up</button>
            <button class="btn" style="border: 1px solid white; color: white;" data-toggle="modal" data-target="#exampleModal2">Sign In</button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center" role="document" style="margin-top: 5%;">
            <div class="modal-content" style="width: 84%;">
                <form method="POST" action="{{ url('dashboard/user/signUp') }}">
                    <div class="modal-header text-center" style="border: none;">
                        <h1 class="modal-title ml-4" id="exampleModalLabel" style="width: 100%;">Sign Up</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <input id="signUp" placeholder="Full Name" style="margin-top: 0;" name="nama" type="text" required>
                        <input id="signUp" placeholder="Phone Number" name="nohp" type="text" required>
                        <input id="signUp" placeholder="Address" name="alamat" type="text" required>
                        <input id="signUp" placeholder="Email" name="email" type="email" required>
                        <input id="signUp" placeholder="Password" name="password" type="password" required>
                        <select style="width: 80%; border: none; border-bottom: 1px solid lightgray; outline: none; margin-top: 2%; margin-bottom: 2%;" name="jk">
                            <option value="L" selected>Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <input id="signUp" type="number" name="umur" placeholder="Umur">
                        <p style="margin-top: 15%; margin-bottom: 0;">Already a member? <a style="font-weight: bold; text-decoration: none; color: black;" data-dismiss="modal" data-toggle="modal" href="#exampleModal2">Sign In</a></p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center" style="border: none; margin-bottom: 8%;">
                        <button type="submit" class="btn" style="background-color: black; color: white; width: 68%;">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center" role="document" style="margin-top: 9%;">
            <div class="modal-content" style="width: 88%;">
                <form method="POST" action="{{ url('dashboard/user/signIn') }}">
                    <div class="modal-header text-center" style="border: none;">
                        <h4 class="modal-title ml-4" id="exampleModalLabel" style="width: 100%;">SIGN IN TO YOUR ACCOUNT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <input id="signIn" placeholder="Email" type="email" name="email" required>
                        <input id="signIn" placeholder="Password" type="password" name="password" required>
                    </div>
                    <div class="modal-footer d-flex justify-content-center" style="border: none; margin-top: 10%; margin-bottom: 2%;">
                        <button type="submit" class="btn" style="background-color: #746BDE; color: white; width: 80%; padding-top: 3%; padding-bottom: 3%;">SIGN IN</button>
                        <a data-dismiss="modal" data-toggle="modal" href="#exampleModal" style="text-decoration: none; color: black;">dont have account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}