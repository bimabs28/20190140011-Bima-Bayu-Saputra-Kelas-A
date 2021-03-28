function waktu() {
    var d = new Date();
  
    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();
    var tgl = d.getDate();
    var bln = d.getMonth();
    var thn = d.getFullYear();
  
    let setJam = h + " : " + m + " : " + s;
    const setTanggal = tgl + "-" + bln + "-" + thn;
  
    document.getElementById("jam").innerHTML = setJam;
    document.getElementById("tanggal").innerHTML = setTanggal;
  
    setTimeout("waktu()", 1000);
  }
  waktu();
  