<!doctype html>
<html>
<title>UJIAN KENDIRI COVID-19</title>
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

h1{
	font-size:20px;
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
 
}}
img{
	margin-top:12px;
}
#form1{
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 20px;
		padding-bottom: 20px;
		
	}
	form{
		
	}

</style>
</head>
<body>
<div class="container align-content-center">
<div class="content" style="width: 80%;background-color:white;" id="form1">
<div class="w3-center" style="padding-bottom:10px;">
<img src="Logo_prasarana.png" style="float:left;width:250px;height:auto;sizes:(max-width: 250px) 50vw, 250px; padding-top:0px;padding-left:20px;padding-right:10px;" name="prasarana">
<div class="w3-center" name="div1">
<h1 style="text-align:left;font-weight:700;margin-right:10px;" name="tajuk">PRASARANA MALAYSIA BERHAD</h1>
<h1 style="text-align:left;font-weight:700;margin-right:10px;" name="tajuk">UJIAN KENDIRI COVID-19</h1>
</div>
</div>
<hr style="height:3px;border:none;color:black;"/>
<form action="pengesahan.php" class="was-validated" method="POST">
<div class="mb-4">
      <label>Nama:</label>
      <input type="text" class="form-control" id="name" placeholder="Nama Kakitangan" name="name" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div>
	<div class="mb-4">
      <label>Id</label>
      <input type="text" class="form-control" id="id" placeholder="ID Kakitangan" name="id" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div>
	<div class="mb-4">
      <label>Nombor IC:</label>
      <input type="text" class="form-control" id="ic" placeholder="Nombor IC" name="ic" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div>
	<h3>Cara-cara untuk membuat ujian kendiri covid-19</h3><br>
	<div class="w3-center">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/3MCLSdbipKE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div><br>
	<h3>Contoh-contoh Keputusan</h3>
	<div class="w3-center">
	<img src="TEST.PNG" style="width:800px;height:auto;">
	</div>
	<div class="mb-4">
      <label>Keputusan Ujian Air liur</label>
      <input type="file" class="form-control" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Sila Isi di ruangan ini.</div>
    </div>
	<button type="submit">Submit</button>
	</form>
	</div>
</body>
</html>
</html>