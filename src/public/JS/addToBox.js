function addToBox() {
    var x = document.getElementById('formFilter');
    var i;
    var text1, text2, text3;
    text1 = "Hari : ";
    text2 = "Jam : ";
    text3 = "Mata Pelajaran : ";
    var hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
    var jam = ["09.00-10.30", "10.30-12.00", "13.00-14.30", "15.30-17.00", "18.30-20.00"];
    var matpel = ["Matematika", "IPA", "Bahasa Inggris"];
    var obj;
    var cnt = 0, cnt2 = 0;
    // console.log(x);
    for(i = 0; i < x.length; i++) {
        obj = x.elements[i];
        // console.log(obj);
        if(obj.name == "hari[]" && obj.checked) {
            text1 += hari[obj.value];
            text1 += "; ";
        }
        if(obj.name == "jam[]" && obj.checked) {
            text2 += jam[obj.value];
            text2 += "; "
        }
        if(obj.name == "matpel[]" && obj.checked) {
            text3 += matpel[obj.value - 1];
            text3 += "; ";
        }
    }
    // console.log(cnt);
    // console.log(cnt2);
    $('#filterHari').attr("value", text1);
    $('#filterJam').attr("value", text2);
    $('#filterMatpel').attr("value", text3);
}