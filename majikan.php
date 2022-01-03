<!DOCTYPE html>
<html>
<title>Borang Pengesahan Majikan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="icon" href="https://3.bp.blogspot.com/-78YgnWTXN_4/WsVR0ygpRZI/AAAAAAAABK0/L4RwchsSuEISEwtw-0Fv86fTGO9Ui-LPwCLcBGAs/s1600/prasarana.jpg">
<head>
<style>
body{
	background-color:#c2c2c2;
}
.center {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.center button {
  width:150px;
  height:40px;
  font-weight:600;
  box-shadow:3px 3px 2px 1px rgba(0,0,0,0.1);
  cursor:pointer;
}
card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  text-align: center;
  background-color: #f1f1f1;
}
.container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            width: 100%;
          
        }
.content {
            position: relative;
			padding-left: 20px;
		padding-right: 20px;
		padding-top: 20px;
		padding-bottom: 20px;
		box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5);
        }
#form1{
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 20px;
		padding-bottom: 20px;
		box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5);
	}
h1{
	font-size:18px;
}
h3{
	font-size:15px;
}
#mohon{
	font-size:12px;
	line-height:200%;
}
table, tr {
  border:1px solid black;
}
select:required:invalid {
        color: #666;
      }	
textarea {
  resize: none;
}
@media only screen and (max-width: 600px) {
  img {
    width: 100px;
	height:auto;
h1{
	font-size:12px;
h3{
	font-size:10px;
}
}
 
}
</style>
</head>
<body>
<div class="container align-content-center">
<div class="content" style="width: 80%;background-color:white;" id="form1" >
<div class="w3-center" >
<img src="Logo_prasarana.png" style="float:left;width:250px;height:auto;sizes:(max-width: 250px) 50vw, 250px; padding-top:0px;padding-left:20px;padding-right:10px;" name="prasarana">
<div class="w3-center" name="div1">
<h1 style="text-align:left;font-weight:700;margin-right:10px;" name="tajuk">PRASARANA MALAYSIA BERHAD<br>
BORANG PERMOHONAN PENGESAHAN MAJIKAN</h1><br>
</div>
</div>
<form action="pengesahan.php" class="was-validated" method="POST">
<div>
<div style="background-color:black;color:white;">
<h3 style="text-align:center;">MAKLUMAT PERMOHONAN</h3>
</div>
<br>
<div class="column align-center" id="mohon">
<input type="checkbox" id="chckselect"> BANK</input><br>
<div class="custom-select" id="selected" style="display:none">
        <select class="mb-2"name="bank">
            <option value="No">PILIH BANK ANDA:</option>
            <option name="BANK ISLAM"value="BANK ISLAM">BANK ISLAM</option>
            <option name="BANK KERJASAMA RAKYAT"value="BANK KERJASAMA RAKYAT">BANK KERJASAMA RAKYAT</option>
			<option name="LAIN-LAIN" value="LAIN-LAIN">LAIN-LAIN</option>
        </select>
    </div>
<input type="checkbox" value="yes"id="penyata"> SLIP/PENYATA GAJI</input><br>
<div id="gaji" style="display:none">
<textarea name="slip" cols="75" rows="5" placeholder="Sila nyatakan bulan dan tahun slip gaji yang ingin dipohon. Maksimum 6 bulan."  style="text-transform:capitalize"></textarea><br>
</div>
<input type="checkbox" value="yes"name="single"> PENGESAHAN BUJANG</input><br>
<input type="checkbox" value="yes"name="other" id="other1"> LAIN-LAIN</input><br>
<div id="text" style="display:none">
<textarea cols="75" rows="5" name="area" placeholder="Sila nyatakan sebab permohonan" ></textarea>
<br>
</div>
</div>
</div>
<br>
<div style="background-color:black;color:white;line-height:200%;">
<h3 style="text-align:center;">MAKLUMAT KAKITANGAN</h3>
</div><br>
<div class="mb-4">
      <label>Nama:</label>
      <input type="text" class="form-control" id="name" placeholder="Nama Kakitangan" name="name" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div>
    <div class="mb-4">
      <label>Ic:</label>
      <input  class="form-control" placeholder="IC Kakitangan" name="ic" pattern="[0-9]{12}"required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini. Hanya isi 12 nombor Ic anda tanpa (-).</div>
    </div>
    <div class="mb-4">
      <label>Divisyen/Jabatan:</label>
        <select class="form-control" name="department"required>
	 <option value="" disabled selected hidden>Divisyen/jabatan kakitangan</option>
	 <option value="Human Resource" name="Human Resource">Human Resource</option>
     <option value="Rapid Bus" name="Rapid Bus">Rapid Bus</option>
     <option value="Rapid Rail" name="Rapid Rail">Rapid Rail</option>
     <option value="MRT" name="MRT">MRT</option> 
	 <option value="Pride" name="Pride">Pride</option>
     <option value="Security" name="Security">Security</option>
     <option value="Information Technology" name="Information Technology">Information Technology</option>
     <option value="Finance" name="Finance">Finance</option>
   </select>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div>
	  <div class="mb-4">
      <label>No. Telefon Bimbit:</label>
      <input type="text" class="form-control" id="contact" placeholder="No Telefon" name="contact" pattern="[0-9]{10}" required>
		  <div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.Hanya isi 10 nombor telefon anda tanpa (-).</div>
    </div>
	<div class="mb-4">
      <label>Email:</label>
      <input  class="form-control" placeholder="Email Kakitangan" name="email" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div><br>
	<div style="background-color:black;color:white;">
	<h3 style="text-align:center;">PENGAKUAN</h3>
</div><br>	
	<div class="mb-4">
	<h4 style="font-size:14px;">*Untuk Potongan Gaji</h4>
<div class="content">
Saya dengan ini mengaku telah memahami dengan penyataan dari "Seksyen 24 Akta Kerja 1955" di mana jumlah keseluruhan potongan daripada gaji kakitangan tidak boleh melebihi 50% daripada gaji kasar kakitangan yang diperolehi sepanjang bulan itu.<br><br>
Oleh yang demikian, sekiranya potongan gaji sedia ada sudah melebihi 50% daripada gaji kasar bulanan saya, permohonan baru ini berhak ditolak oleh
pihak Divisyen Modal Insan.

</div>
</div>
	<div class="mb-4">
	<input type="checkbox" class="was-validated" required> Dengan ini saya mengaku bahawa semua maklumat di atas adalah benar.
	</div><br>
    <button type="submit" class="btn btn-primary" value="submit" name="submit">Hantar</button>
</form>
</div>
</div>
    <script type="text/javascript">
        $(function () {
            $("#chckselect").click(function () {
                if ($(this).is(":checked")) {
                    $("#selected").slideDown();
                } else {
                    $("#selected").slideUp();
                }
            });
        });
    </script>
<script>
 $(function () {
            $("#other1").click(function () {
                if ($(this).is(":checked")) {
                    $("#text").slideDown();
                } else {
                    $("#text").slideUp();
				}
            });
        });
</script>
<script>
 $(function () {
            $("#penyata").click(function () {
                if ($(this).is(":checked")) {
                    $("#gaji").slideDown();
                } else {
                    $("#gaji").slideUp();
				}
            });
        });
</script>
</body>
</html>