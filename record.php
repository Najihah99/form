<!DOCTYPE html>
<html>
<title>Leave Records Form</title>
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
select:required:invalid {
        color: #666;
      }
</style>
</head>
<body>
<div class="container align-content-center">
<div class="content" style="width: 80%;background-color:white;" id="form1" >
<form action="lrecord.php" class="was-validated" method="POST">
<h1 style="text-align:center">LEAVE RECORDS</h1><br><br>
<div class="mb-4">
      <label>NAME:</label>
      <input type="text" class="form-control" placeholder="Employee's Name" name="name" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
<div class="mb-4">
      <label>STAFF ID:</label>
      <input type="text" class="form-control" placeholder="Employee's ID" name="id" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
	<div class="mb-4">
      <label>Divisyen/Jabatan:</label>
        <select class="form-control" name="department"required>
	 <option value="" disabled selected hidden>Choose the department</option>
	 <option value="HUMAN RESOURCE" name="HUMAN RESOURCE">Human Resource</option>
     <option value="RAPID BUS" name="RAPID BUS">Rapid Bus</option>
     <option value="RAPID RAIL" name="RAPID RAIL">Rapid Rail</option>
     <option value="MRT" name="MRT">MRT</option> 
	 <option value="PRIDE" name="PRIDE">Pride</option>
     <option value="SECURITY" name="SECURITY">Security</option>	
     <option value="INFORMATION TECHNOLOGY" name="INFORMATION TECHNOLOGY">Information Technology</option>
     <option value="FINANCE" name="FINANCE">Finance</option>
   </select>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
	<div class="mb-4">
      <label>TYPE OF LEAVE:</label>
      <select class="form-control" name="type"  placeholder="Leave" required>
	 <option value="" disabled selected hidden>Choose type of leave</option>
	 <option value="ANNUAL LEAVE" name="ANNUAL LEAVE">Annual Leave</option>
     <option value="EMERGENCY LEAVE" name="EMERGENCY LEAVE">Emergency Leave</option>
     <option value="COMPASSIONATE LEAVE" name="COMPASSIONATE LEAVE">Compassionate Leave</option>
     <option value="MATERNITY LEAVE" name="MATERNITY LEAVE">Maternity Leave</option>
   </select>
    </div>
	<div class="mb-4">
      <label>START DATE:</label>
      <input type="date" class="form-control" placeholder="Leave's Start Date"id="start" name="start"required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
	<div class="mb-4">
      <label>END DATE</label>
      <input type="date" class="form-control" placeholder="Leave's End Date" id="end" name="end" required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
<div class="mb-4">
      <label>TOTAL LEAVE APPLY:</label>
      <input type="number" class="form-control" placeholder="Total Leave Apply" id="apply"name="apply" required>
	  <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
	<div class="mb-4">
      <label>BALANCE AVAILABLE:</label>
      <input type="number" class="form-control" placeholder="Leave's Balance" name="balance"required>
		<div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill up in this field.</div>
    </div>
	<div class="mb-4">
      <label>REMARKS:</label>
      <input type="text" class="form-control" placeholder="Remarks" name="remarks">
    </div>
	 <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
</form>
</div>
<script>
         function getDays(){
 
    var start_date = new Date(document.getElementByName('#start').value);
    var end_date = new Date(document.getElementByName('#end').value);
    //Here we will use getTime() function to get the time difference
    var time_difference = end_date.getTime() - start_date.getTime();
    //Here we will divide the above time difference by the no of miliseconds in a day
    var days_difference = time_difference / (1000*3600*24);
    //alert(days);
    document.getElementByName('#apply').value = days_difference;
  }

    </script>
</body>
</html>