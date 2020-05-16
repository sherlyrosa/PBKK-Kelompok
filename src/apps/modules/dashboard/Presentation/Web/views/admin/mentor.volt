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
        <a type="button" class="btn" href="">Mentor</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/pembayaran') }}">Pembayaran</a>
        <a type="button" class="btn" href="{{ url('dashboard/admin/logout') }}">Sign Out</a>
    </div>
    <div class="kontenmentorcoba">
        <img class = "mentor1" src="{{ url("public/men.JPG") }}">
        <p class="mentor2">Anda bisa menambah, edit, hapus, lihat review</p>
    </div>
</div>
    <div class="Tutor">
        <h1> List Tutor </h1>
            <table class="tabelTutor">
                <tr>
                    <!-- <th></th> -->
                    <th> Edit/Delete</th>
                    <th> Foto </th>
                    <th colspan="3"> Dekripsi </th>
                </tr>
                {% if mentor %}
                    {% for list in mentor %} 
                        <tr>
                            <tr>
                                <td rowspan="{{ list.getLen()+1 }}">
                                    <form action="{{ url('dashboard/admin/editmentor') }}" method="POST">
                                        <input type="hidden" name="edit" value="{{ list.getId() }}">
                                        <button class="btn btn-primary">Edit</button>
                                    </form>
                                    <form action="{{ url('dashboard/admin/mentordelete') }}" method="POST">
                                        <input type="hidden" name="delete" value="{{ list.getId() }}">
                                        <button class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                                <td rowspan="{{ list.getLen()+1 }}"> <center><img src="{{ url(list.getFoto()) }}" style="height: 200px; width: 200px;"></center></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td colspan="2"> {{ list.getNama() }} </td>
                            </tr>
                            <tr>
                                <td>Pengalaman</td>
                                <td colspan="2"> {{ list.getPengalaman() }} </td>
                            </tr>
                            <tr>
                                <td>Review</td>
                                <td colspan="2"> {{ list.getReview() }} </td>
                            </tr>
                            <tr>
                                <td rowspan="{{ list.getLenMatpel() }}">Mata Pelajaran</td>
                                <td colspan="2">
                                    {% for mata in list.listMatpel() %}
                                        <?php echo "$mata" ?>
                                    {% endfor %}
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="{{ list.getLenJadwal() + 1 }}">Jadwal</td>
                                {% for hari in list.listHari() %}
                                    <tr>
                                        <td rowspan="{{ list.rowCntHari(hari) }}">
                                            <?php echo "$hari" ?>
                                        </td>
                                        {% for jam in list.listJam(hari) %}
                                            <td>
                                                <?php echo "$jam" ?>
                                            </td>
                                        {% endfor %}
                                    </tr>
                                {% endfor %}
                            </tr>
                        </tr>
                    {% endfor %}
                {% endif %}
            </table>
        </br>
        <button class="btnTmbhTutor" onclick="window.location.href='{{ url('dashboard/admin/tambahmentor') }}'">Tambah Tutor?</button>
    </div>
{% endblock %}
