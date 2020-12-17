window.setTimeout("hari()",0)
function hari(){
    var hari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    var bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember");
    var tanggal = new Date();
    setTimeout("hari()",0);
    document.getElementById("tanggal").innerHTML =hari[tanggal.getDay()]+",  "+tanggal.getDate()+" "+bulan[tanggal.getMonth()]+" "+tanggal.getFullYear();
}
