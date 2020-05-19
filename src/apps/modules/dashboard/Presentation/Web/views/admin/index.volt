{% extends "layout/base.volt" %}
{% block htm %}{% endblock %}
{% block styl %}{% endblock %}
{% block bod %}
{% endblock %}
{% block content %}
<form action="{{ url('dashboard/admin/register') }}" method="POST">
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" name="nama" id="orangeForm-name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" name="email" id="orangeForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" name="password" id="orangeForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Sign up</button>
        </div>
      </div>
    </div>
  </div>
</form>
<form action="{{ url('dashboard/admin/login') }}" method="POST">
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input name="email" type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input name="password" type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="text-center">
    <div class="logocoba">
        <img src="{{ url("public/logo1.JPG") }}">
    </div>
    <div class="navbarcoba">
        <a href="" class="btn" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a>
        <a href="" class="btn" data-toggle="modal" data-target="#modalLoginForm">Sign in</a>
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