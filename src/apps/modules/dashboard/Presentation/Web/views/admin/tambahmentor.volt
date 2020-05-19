{% extends "Layout\base.volt" %}
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
        <a type="button" class="btn" href="{{ url('dashboard/admin/mentor') }}">Mentor</a>
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
        <form class="formTutor" id="formKu" action="{{ url('dashboard/admin/tambahmentor') }}" method="POST" enctype="multipart/form-data">
            <table class="tabelTutor">
                <tr>
                    <td> Foto </td>
                    <td colspan="2"> <input type="file" name="Foto"> </td>
                </tr>
                <tr>
                    <td> Nama </td>
                    <td colspan="2"> <input type="text" name="Nama"> </td>
                </tr>
                <tr>
                    <td rowspan="5"> Jadwal </td>
                    <td>
                        <a>Senin</a>
                    </td>
                    <td> 
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="01"> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="02"> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="03"> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Selasa</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="04"> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="05"> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="06"> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Rabu</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="07"> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="08"> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="09"> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Kamis</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="10"> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="11"> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="12"> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Jumat</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="13"> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="14"> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="15"> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td> Mata Pelajaran</td>
                     <td colspan="2">
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="1"> Biologi <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="2"> Fisika <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="3"> Kimia <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="4"> Matematika <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="5"> IPS <br>
                    </td>
                </tr>
                <tr>
                    <td> Pengalaman </td>
                    <td colspan="2"> <input type="text" name="Pengalaman"> </td>
                </tr>
                <tr>
                    <td> Total Pereview </td>
                    <td colspan="2"> <input type="text" name="TotalPereview"> </td>
                </tr>
                <tr>
                    <td> Review </td>
                    <td colspan="2"> <input type="text" name="Review"> </td>
                </tr>
                <tr>
                    <td> Pengalaman </td>
                    <td colspan="2"> <input type="text" name="Pengalaman"> </td>
                </tr>
                <tr>
                    <td> TotalPereview </td>
                    <td colspan="2"> <input type="text" name="TotalPereview"> </td>
                </tr>
                <tr>
                    <td> Review </td>
                    <td colspan="2"> <input type="text" name="Review"> </td>
                </tr>
            </table>
            <span id="tulisan"></span>
            <button class="btnTmbhTutor" id="btnTmbh">Tambah Mentor?</button>
        </form>
    </div>
{% endblock %}
