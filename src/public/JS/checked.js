function cekFungsi() {
    var x = document.getElementById('formKu');
    var i;
    var obj;
    var cnt = 0;
    var prev = 0;
    // console.log(x);
    for(i = 0; i < x.length; i++) {
        obj = x.elements[i];
        // console.log(obj);
        if(obj.name == "position[]" && obj.checked) ;
    }
}