{% include "layout/navbar.volt" %}
{% block navbarCont %}
    <nav class="navbar navbar-expand-lg navbar-light py-1" style="background-color: white; padding-left: 4%;">
        <div class="mr-auto">
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/home') }}"  style="color: #85898A;">Home</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/submission') }}" style="color: #85898A;">Submission</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/howto') }}" style="color: #85898A;">How To</a>
            <a class="navbar-brand" id="navbarA" href="{{ url('dashboard/user/contactus') }}" style="color: #85898A;">Contact Us</a>
            <a class="navbar-brand active2" id="navbarA" href="#" style="color: #85898A;">My Course</a>
        </div>
        <div class="ml-auto" style="width: 16%; text-align: right;">
            <a class="btn" style="background-color: #26405B; color: white; padding-left: 10%; padding-right: 10%;" href="{{ url('dashboard/user/signOut') }}">Sign Out</a>
        </div>
    </nav>
    <div class="text-center" style="width: 100%; background-color: white; border-top: 2px solid #26405B; padding-top: 3%;">
        <div class="d-flex justify-content-center text-center" style="color: #26405B; width: 100%; margin-top: 3%; flex-wrap: wrap;">
            {% for mentor in riwayat %}
            <div style="margin-top: 4%; flex: 0 0 50%; padding-bottom: 2%;">
                <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 60%;">
                    <img src="{{ url(mentor.getFoto()) }}" style="width: 120px;">
                </div>
                <p style="margin-bottom: 0; margin-top: 0;">{{ mentor.getNama() }}</p>
                <p style="margin-bottom: 0; margin-top: 0;">Pengalaman: {{ mentor.getPengalaman() }}</p>
                <p style="margin-bottom: 0; margin-top: 0;">
                    Matpel: 
                    {% for i in 0 .. (mentor.listMatpel()|length - 1) %}
                        {{ mentor.listMatpel()[i] }}
                        {% if i != mentor.listMatpel()|length - 1 %}
                            ,
                        {% endif %}
                    {% endfor %}
                </p>
                <p style="margin-bottom: 0; margin-top: 0;"> {{ mentor.getReview() }} </p>
                <button class="btn" style="background-color: #26405B; color: white" data-toggle="modal" data-target="#exampleModal">Review?</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="margin-top: 9%;">
                    <div class="modal-content">
                        <form method="POST">
                            <div class="modal-body text-center">
                                <img src="{{ url(mentor.getFoto()) }}" style="width: 100px;">
                                <p style="margin-top: 2%;">{{ mentor.getNama() }}</p>
                                <div class="rating">
                                    <input type="radio" name="star" value="5" id="star1"><label for="star1"></label>
                                    <input type="radio" name="star" value="4" id="star2"><label for="star2"></label>
                                    <input type="radio" name="star" value="3" id="star3"><label for="star3"></label>
                                    <input type="radio" name="star" value="2" id="star4"><label for="star4"></label>
                                    <input type="radio" name="star" value="1" id="star5"><label for="star5"></label>
                                </div>
                                <input type="hidden" name="idm" value="{{ mentor.getId() }}">
                                <input type="hidden" name="val" value="{{ mentor.getReviewVal() }}">
                                <input type="hidden" name="cnt" value="{{ mentor.getReviewCnt() }}">
                            </div>
                            <div class="modal-footer d-flex justify-content-center" style="border: none; margin-top: 10%; margin-bottom: 2%;">
                                <button type="submit" class="btn" style="background-color: #26405B; color: white; width: 40%;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            {% endfor %}
        </div>
    </div>

    
{% endblock %}