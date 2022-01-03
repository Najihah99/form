<?php
include('dbcon.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
table {
border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: center;
  padding: 8px;
}
th{
	background-color:black;
	color:white;
	text-align:center;
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {
	background-color:#c7d5ff;
	}
#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
.header{
	width:100%
	height:500px;
}

.panel {
 
  display: none;
  background-color:#f5f5f5;
}
.flip{
	height:4%;
	text-align:left;
	padding-left:25px;
	background-color: #383838;
	color:white;
	padding-top:10px;
}
@media only screen and (max-width: 600px) {
  th{
	  font-size:12px;
  }
  tr{
	  font-size: 10px;
}
}
 table.scrolldown tbody {
              
            /* Set the height of table body */
            height: 50px; 
              
            /* Set vertical scroll */
            overflow-y: auto;
              
            /* Hide the horizontal scroll */
            overflow-x: hidden; 
        }
.center {
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            width: 100%;
          
        }
h1{
	font-size:23px;
}
.record{
	padding-left:2%;
	padding-right:2%;
}
h2{
	font-size:18px;
}
th{
	font-size:14px;
}
tr{
	font-size:12px;
}
#div1{
	padding-top:20px;
}

</style>
<div class="record">
<div class="container align-content-center" style="padding-top:30px;">
<div class="w3-center" >
<img src="Logo_prasarana.png" style="float:left;width:250px;height:auto;sizes:(max-width: 250px) 50vw, 250px; padding-top:0px;padding-left:20px;padding-right:10px;" ><br><br>
<div id="div1">
<h1 style="text-align:left;font-weight:700;margin-right:10px;" name="tajuk">PRASARANA MALAYSIA BERHAD<br>
Summary of Leave Records based on Department</h1><br>
</div>
</div>
</div>
<br><br>
<div class="flip">HUMAN RESOURCES</div>
<div class="panel">
<div class="content">
	<p id="success"></p>
        <div class="table-wrapper" style="overflow-x:auto;">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Human Resources Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"/>
			   <div align="left" >
			   <button type="button" id="export_button" class="btn btn-success btn-sm" onclick="getConfirmation()">Export</button>
			   </div>
            <table class="table table-striped table-hover" id="mytable" align="center">
			   <thead>
                    <tr>
						<th onclick="sortTable(0)">ID</th>
                        <th onclick="sortTable(1)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='HUMAN RESOURCE'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"]; ?></td>
					<td><?php echo $row["start"]; ?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			<br><br>
        </div></div></div>
		<div class="flip">SECURITY</div>
		<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Security Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm" onclick="security()">Export</button>
            <table class="table table-striped table-hover" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='SECURITY'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			<br><br>
        </div></div>
		<div class="flip">PRIDE</div>
		<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Pride Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm">Export</button>
            <table class="table table-striped table-hover scrolldown" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='PRIDE'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			<br><br>
    </div></div>
	<div class="flip">RAPID BUS</div>
	<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Rapid Bus Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm">Export</button>
            <table class="table table-striped table-hover" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='RAPID BUS'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table><br><br>
    </div></div>
	<div class="flip">RAPID RAIL</div>
	<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Rapid Rail Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm">Export</button>
            <table class="table table-striped table-hover" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='RAPID RAIL'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			<br><br>
    </div></div>
	<div class="flip">MRT</div>
	<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>MRT Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm">Export</button>
            <table class="table table-striped table-hover" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='MRT'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			<br><br>
    </div></div>
	<div class="flip">INFORMATION TECHNOLOGY</div>
	<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Information Technology Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm">Export</button>
            <table class="table table-striped table-hover" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='INFORMATION TECHNOLOGY'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			<br><br>
    </div></div>
	<div class="flip">FINANCE</div>
	<div class="panel">
		<div class="content">
		<div class="table-wrapper">
		</div>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Finance Summary Leave Records</b></h2>
					</div>
                </div>
            </div>
			<button type="button" id="excell" class="btn btn-success btn-sm">Export</button>
            <table class="table table-striped table-hover" align="center" id="mytable2">
                <thead>
                    <tr>
						<th onclick="sortName(1)">ID</th>
                        <th onclick="sortName(0)">NAME</th>
                        <th>TYPE OF LEAVE</th>
                        <th>START DATE</th>
						<th>END DATE</th>
                        <th>DAYS TAKEN</th>
                        <th>LEAVE BALANCE </th>
                        <th>REMARKS</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM leaverecord WHERE department='FINANCE'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $row["id"]; ?></td>
					<td id="name"><?php echo $row["name"]; ?></td>
					<td><?php echo $row["type"];?></td>
					<td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"]; ?></td>
					<td><?php echo $row["apply"]; ?></td>
					<td><?php echo $row["balance"]; ?></td>
					<td><?php echo $row["remarks"]; ?></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
<br><br>			
    </div></div>
</div>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("mytable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<script>	
function sortName(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("mytable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
 while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
  for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
   x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
   rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
     if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<script>
function html_table_to_excel(type)
    {
        var data = document.getElementById('mytable');

        var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

        XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

        XLSX.writeFile(file, 'hrrecord.' + type);
    }
	function getConfirmation(){
		if(confirm("Are you sure export this file?")==true){
			html_table_to_excel('xlsx');
		}else{
			return false;
		}
	}


</script>
<script>
function table_to_excel(type)
    {
        var data2 = document.getElementById('mytable2');

        var file2 = XLSX.utils.table_to_book(data2, {sheet: "sheet1"});

        XLSX.write(file2, { bookType: type, bookSST: true, type2: 'base64' });

        XLSX.writeFile(file2, 'security' + type2);
    }

   function security(){
		if(confirm("Are you sure export this file?")==true){
			table_to_excel('xlsx');
		}else{
			return false;
		}
	}

</script>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<script> 
$(".flip").click(function(){
  $flip = $(this);
    $content = $flip.next();
    $content.slideToggle();
  });
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>