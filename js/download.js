window.onload = downloadcontetn;
function downloadcontetn() {
    $(document).ready(function () {
        $.ajax({
            url: "downloadimg.php",
            type: "post",
            data:{
                kod:$("input#kod").val()
            },
            success:function (tablica) {
                $("#change").html(tablica);
            },
        });
    });
    $(document).ready(function () {
        $.ajax({
            url: "downloadtext.php",
            type: "post",
            data:{
                id:$("input#kod").val()
            },
            success:function (tablica) {
                $("#text").html(tablica);
            },
        });
    });
}
function zoom(id) {
    $(document).ready(function () {
        $.ajax({
            url: "zoomfoto.php",
            type: "post",
            data:{
                id:id
            },
        });
    });
    $(document).ready(function () {
        $.ajax({
            url: "iframzoom.html",
            type: "post",
            success:function (tablica) {
                $("#fotosize").html(tablica);
            }
        });
    });
}
function closeifram() {
    $("#fotosize").html(" ");
}