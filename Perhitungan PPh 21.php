<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
<?php

function perkenalan(){
    echo "<h1>SELAMAT DATANG DI WEB ONLINE PPH 21</h1>";
    echo "<h1>TAX CENTER FEB UNDIP</h1>";
    echo "<h1>SILAHKAN MENGISI BIODATA DI BAWAH INI</h1>";
  }
  perkenalan ();

if (isset($_POST["submit"])) {
    $nama_karyawan = $_POST["nama_karyawan"]; 
    $NPWP = $_POST["NPWP"];
    $status = $_POST["status"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $gaji_pokok = $_POST["gaji_pokok"];
    $tunjangan_jabatan = $_POST["tunjangan_jabatan"];
    $tunjangan_transport = $_POST["tunjangan_transport"];
    $tunjangan_makanan = $_POST["tunjangan_makanan"];
    $JKK = 0.001 * $gaji_pokok;
    $JKM = 0.002 * $gaji_pokok;
    $gaji_brutto = $gaji_pokok + $tunjangan_jabatan + $tunjangan_makanan + $tunjangan_transport + $JKM + $JKK;

    $biaya_jabatan = 0.05 * $gaji_brutto;
    if ($biaya_jabatan > 500000) {
        $biaya_jabatan = 500000;
    }
    $iuran_pensiun = $_POST['iuran_pensiun'];
    if ($iuran_pensiun > 200000) {
        $iuran_pensiun = 200000;
    }
    $gaji_netto_bulan = $gaji_brutto - $biaya_jabatan - $iuran_pensiun;
    $gaji_netto_tahun = $gaji_netto_bulan * 12;

    if ($status=="TK/0") {
        $PKP = $gaji_netto_tahun-54000000;
    }if ($status=="TK/1") {
        $PKP = $gaji_netto_tahun-58500000;
    }if ($status=="TK/2") {
        $PKP = $gaji_netto_tahun-63000000;
    }if ($status=="TK/3") {
        $PKP = $gaji_netto_tahun-67500000;
    }if ($status=="K/0") {
        $PKP = $gaji_netto_tahun-58500000;
    }if ($status=="K/1") {
        $PKP = $gaji_netto_tahun-63000000;
    }if ($status=="K/2") {
        $PKP = $gaji_netto_tahun-67500000;
    }if ($status=="K/3") {
        $PKP = $gaji_netto_tahun-72000000;
    }

    if  ($PKP>=0 && $PKP<=50000000) {
        $pajak = $PKP*0.05;
    }if ($PKP>=50000001 && $PKP<=250000000) {
        $pajak = $PKP*0.15;
    }if ($PKP>=250000001 && $PKP<=500000000) {
        $pajak = $PKP*0.25;
    }if ($PKP>=500000001) {
        $pajak = $PKP*0.30;
    }

    $pajak = $pajak / 12;

    $gaji_karyawan_perbulan = $gaji_netto_bulan - $pajak;

    function biodata ($nama_karyawan) {
        echo "Nama Karyawan = ".$nama_karyawan."<br/>"; 
    }function biodata1 ($NPWP) {
        echo "NPWP Karyawan = ".$NPWP."<br/>";
    }function biodata2 ($status) {
        echo "Status PTKP = ".$status."<br/>";
    }function biodata3 ($jenis_kelamin) {
        echo "Jenis Kelamin Karyawan = ".$jenis_kelamin."<br/>";
    }function biodata4 ($gaji_pokok) {
        echo "Gaji Pokok Karyawan = Rp ".number_format($gaji_pokok)."<br/>";
    }function biodata5 ($tunjangan_jabatan) {
        echo "Tunjangan Jabatan Karyawan = Rp ".number_format($tunjangan_jabatan)."<br/>";
    }function biodata6 ($tunjangan_transport) {
        echo "Tunjangan Transport Karyawan = Rp ".number_format($tunjangan_transport)."<br/>";
    }function biodata7 ($tunjangan_makanan) {
        echo "Tunjangan Makanan Karyawan = Rp ".number_format($tunjangan_makanan)."<br/>";
    }function biodata8 ($JKK) {
        echo "Jaminan Kecelakaaan Kerja Karyawan = Rp ".number_format($JKK)."<br/>";
    }function biodata9 ($JKM) {
        echo "Jaminan Kematian Karyawan = Rp ".number_format($JKM)."<br/>";
    }function biodata10 ($gaji_brutto) {
        echo "Gaji Brutto Karyawan Per Bulan = Rp ".number_format($gaji_brutto)."<br/>";
    }function biodata11 ($biaya_jabatan) {
        echo "Biaya Jabatan Karyawan = Rp ".number_format($biaya_jabatan)."<br/>";
    }function biodata12 ($iuran_pensiun) {
        echo "Iuran Pensiun Karyawan = Rp ".number_format($iuran_pensiun)."<br/>";
    }function biodata13 ($gaji_netto_bulan) {
        echo "Gaji Netto Karyawan Per Bulan = Rp ".number_format($gaji_netto_bulan)."<br/>";
    }function biodata14 ($gaji_netto_tahun) {
        echo "Gaji Netto Karyawan Per Tahun = Rp ".number_format($gaji_netto_tahun)."<br/>";
    }function biodata15 ($PKP) {
        echo "Penghasilan Kena Pajak Karyawan = Rp ".number_format($PKP)."<br/>";
    }function biodata16 ($pajak) {
        echo "Pajak Karyawan Per Bulan = Rp ".number_format($pajak)."<br/>";
    }function biodata17 ($gaji_karyawan_perbulan) {
        echo "Gaji Karyawan Setelah dikurangi Pajak Per Bulan = Rp ".number_format($gaji_karyawan_perbulan)."<br/>";
    }

    biodata ($nama_karyawan);
        echo "<hr>";
    biodata1 ($NPWP);
        echo "<hr>";
    biodata2 ($status);
        echo "<hr>";
    biodata3 ($jenis_kelamin);
        echo "<hr>";
    biodata4 ($gaji_pokok);
        echo "<hr>";
    biodata5 ($tunjangan_jabatan);
        echo "<hr>";
    biodata6 ($tunjangan_transport);
        echo "<hr>";
    biodata7 ($tunjangan_makanan);
        echo "<hr>";
    biodata8 ($JKK);
        echo "<hr>";
    biodata9 ($JKM);
        echo "<hr>";
    biodata10 ($gaji_brutto);
        echo "<hr>";
    biodata11 ($biaya_jabatan);
        echo "<hr>";
    biodata12($iuran_pensiun);
        echo "<hr>";
    biodata13 ($gaji_netto_bulan);
        echo "<hr>";
    biodata14 ($gaji_netto_tahun);
        echo "<hr>";
    biodata15 ($PKP);
        echo "<hr>";
    biodata16 ($pajak);
        echo "<hr>";
    biodata17 ($gaji_karyawan_perbulan);
        echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
  background-color: #FFE4C4;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-blend-mode: overlay;
  backdrop-filter: blur(4px);
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
  text-decoration-color: #ffffff;
}
    
    @keyframes glow {
        
  25% {
    color: yellow;
    text-shadow: 0 0 5px yellow;
    font-family: Arial, Helvetica, sans-serif;
  }
  50% {
    color: blue;
    text-shadow: 0 0 10px blue;
    font-family: Arial, Helvetica, sans-serif;
  }
  100% {
    color: green;
    text-shadow: 0 0 15px green;
    font-family: Arial, Helvetica, sans-serif;
  }
}

h1 {
  animation: glow 1.5s infinite;
  font-family: Arial, Helvetica, sans-serif; 
    }
    .my-element {
    animation-name: glow;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    background-color: #f2f2f2;
    }

    .centered-button {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .custom-button {
        background-color: #ffb900;
        border: 5px;
        color: #000000;
        padding: 15px 40px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
    hr, br {
      padding: 1px;
      text-align: center;
      color: #ffffff;
    }
    
</style>
<body class="body">
<h1 align="center"><font color="#ffffff" style="alignment-baseline:" ><i><u>Biodata </u></i></font></h1>
    <form action="" method="post">
        <table border = '2' align = 'center'>
            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=nama_karyawan>Nama Karyawan</label></th>
                <th>=</th>
                <th><input type=text id=nama_karyawan name=nama_karyawan></th> 
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=NPWP>NPWP</label></th>
                <th>=</th>
                <th><input type=text id=NPWP name=NPWP></th> 
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=status>Status</label></th>
                <th>=</th>
                <th><select name="status" id="">
                        <option value="TK/0">TK/0</option>
                        <option value="TK/1">TK/1</option>
                        <option value="TK/2">TK/2</option>
                        <option value="TK/3">TK/3</option>
                        <option value="K/0">K/0</option>
                        <option value="K/1">K/1</option>
                        <option value="K/2">K/2</option>
                        <option value="K/3">K/3</option>
                    </select> 
                </th>
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=jenis_kelamin>Jenis Kelamin</label></th>
                <th>=</th>    
                <th>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br/> 
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<br/>  
                </th>
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=gaji_pokok>Gaji Pokok</label></th>
                <th>=</th>
                <th><input type=text id=gaji_pokok name=gaji_pokok></th>   
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=tunjangan_jabatan>Tunjangan Jabatan</label></th>
                <th>=</th>
                <th><input type=text id=tunjangan_jabatan name=tunjangan_jabatan></th>
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=tunjangan_transport>Tunjangan Transport</label></th>
                <th>=</th>
                <th><input type=text id=tunjangan_transport name=tunjangan_transport></th>
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=iuran_pensiun>Iuran pensiun</label></th>
                <th>=</th>
                <th><input type=text id=iuran_pensiun name=iuran_pensiun></th>
            </tr>

            <tr bgcolor = '#ffe660' align = 'justify'>
                <th><label for=tunjangan_makanan>Tunjangan Makanan</label></th>
                <th>=</th>
                <th><input type=text id=tunjangan_makanan name=tunjangan_makanan></th>
            </tr>
        </table>       
<div class="centered-button">
    <button class="custom-button" type="submit" name="submit">Next</button>
</div>
    </form>
</body>
</html>
