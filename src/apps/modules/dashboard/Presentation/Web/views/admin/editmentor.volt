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
        <form class="formTutor" id="formKu" action="{{ url('dashboard/admin/editmentorpost') }}" method="POST" enctype="multipart/form-data">
            <table class="tabelTutor">
                <tr>
                    <td> Nama </td>
                    <td colspan="2"> <input type="text" name="nama" value="{{ dataMentor.getNama() }}"> </td>
                </tr>
                <tr>
                    <td rowspan="5"> Jadwal </td>
                    <td>
                        <a>Senin</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="01" {% if dataMentor.statusJadwal("01") %} <?php echo "checked" ?> {% endif %}> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="02" {% if dataMentor.statusJadwal("02") %} <?php echo "checked" ?> {% endif %}> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="03" {% if dataMentor.statusJadwal("03") %} <?php echo "checked" ?> {% endif %}> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Selasa</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="04" {% if dataMentor.statusJadwal("04") %} <?php echo "checked" ?> {% endif %}> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="05" {% if dataMentor.statusJadwal("05") %} <?php echo "checked" ?> {% endif %}> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="06" {% if dataMentor.statusJadwal("06") %} <?php echo "checked" ?> {% endif %}> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Rabu</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="07" {% if dataMentor.statusJadwal("07") %} <?php echo "checked" ?> {% endif %}> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="08" {% if dataMentor.statusJadwal("08") %} <?php echo "checked" ?> {% endif %}> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="09" {% if dataMentor.statusJadwal("09") %} <?php echo "checked" ?> {% endif %}> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Kamis</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="10" {% if dataMentor.statusJadwal("10") %} <?php echo "checked" ?> {% endif %}> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="11" {% if dataMentor.statusJadwal("11") %} <?php echo "checked" ?> {% endif %}> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="12" {% if dataMentor.statusJadwal("12") %} <?php echo "checked" ?> {% endif %}> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>Jumat</a>
                    </td>
                    <td>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="13" {% if dataMentor.statusJadwal("13") %} <?php echo "checked" ?> {% endif %}> 17.00-18.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="14" {% if dataMentor.statusJadwal("14") %} <?php echo "checked" ?> {% endif %}> 18.00-19.00<br>
                        <input type="checkbox" name="jadwal[]" onclick="cekFungsi()" value="15" {% if dataMentor.statusJadwal("15") %} <?php echo "checked" ?> {% endif %}> 19.00-20.00<br>
                    </td>
                </tr>
                <tr>
                    <td> Mata Pelajaran</td>
                     <td colspan="2">
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="1" {% if dataMentor.statusMatpel(1) %} <?php echo "checked" ?> {% endif %}>Biologi <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="2" {% if dataMentor.statusMatpel(2) %} <?php echo "checked" ?> {% endif %}> Fisika <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="3" {% if dataMentor.statusMatpel(3) %} <?php echo "checked" ?> {% endif %}> Kimia <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="4" {% if dataMentor.statusMatpel(4) %} <?php echo "checked" ?> {% endif %}> Matematika <br>
                        <input type="checkbox" name="mapel[]"  onclick="cekFungsi()" value="5" {% if dataMentor.statusMatpel(5) %} <?php echo "checked" ?> {% endif %}> IPS <br>
                    </td>
                </tr>
                <tr>
                    <td> Pengalaman </td>
                    <td colspan="2"> <input type="text" name="pengalaman" value="{{ dataMentor.getPengalaman() }}"> </td>
                </tr>
            </table>
            </br>
            <span id="tulisan"></span>
            <input type="hidden" name="idm" value="{{ dataMentor.getId() }}">
            <button class="btnTmbhTutor" id="btnTmbh">Edit Mentor?</button>
        </form>
    </div>
{% endblock %}