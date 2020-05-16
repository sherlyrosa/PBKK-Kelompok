$(document).ready(function() {
    var x = document.getElementById('formKu');
    var i;
    var obj;
    var cnt = 0, cnt2 = 0;
    // console.log(x);
    for(i = 0; i < x.length; i++) {
        obj = x.elements[i];
        // console.log(obj);
        if(obj.name == "jadwal[]" && obj.checked) cnt++;
        if(obj.name == "mapel[]" && obj.checked) cnt2++;
    }
    // console.log(cnt);
    // console.log(cnt2);
    if(cnt == 0 || cnt2 == 0) {
        $('#tulisan').html('Checkbox harus diisi').css('color', 'red');
        $('#btnTmbh').attr("disabled", true);
    }
    else if(cnt != 0 && cnt2 != 0) {
        $('#tulisan').empty();
        $('#btnTmbh').attr("disabled", false);
    }
});

function cekFungsi() {
    var x = document.getElementById('formKu');
    var i;
    var obj;
    var cnt = 0, cnt2 = 0;
    // console.log(x);
    for(i = 0; i < x.length; i++) {
        obj = x.elements[i];
        // console.log(obj);
        if(obj.name == "jadwal[]" && obj.checked) cnt++;
        if(obj.name == "mapel[]" && obj.checked) cnt2++;
    }
    console.log(cnt);
    console.log(cnt2);
    if(cnt == 0 || cnt2 == 0) {
        $('#tulisan').html('Checkbox harus diisi').css('color', 'red');
        $('#btnTmbh').attr("disabled", true);
    }
    else if(cnt != 0 && cnt2 != 0) {
        $('#tulisan').empty();
        $('#btnTmbh').attr("disabled", false);
    }
}