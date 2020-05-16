$(document).ready(function() {
    $(":input").on('keyup mouseup', function () {
        var x = document.getElementById('formCari');
        var i;
        var obj;
        var total = parseInt(0, 10);
        // console.log(x);
        // console.log(total);
        for(i = 0; i < x.length; i++) {
            obj = x.elements[i];
            // console.log(obj);
            if(obj.name == "jumlahIkut[]") {
                // console.log(obj.value);
                total = parseInt(total, 10) + parseInt(obj.value, 10);
            }
        }
        console.log(total);
        var maksimal = $('#maksim').val();
        console.log(maksimal);
        if(total == maksimal)
            $("#pesan").css("display", "none");
        else $("#pesan").css("display", "block");
    }).trigger('mouseup');
});