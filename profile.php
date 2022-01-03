<?php
include('dbcon.php');
?>
<style>
.overlay-form {
  position:absolute;
  top:50vh;
  left:0px;
  width:100vw;
  height:0vh;
  background:rgba(0,0,0,0.8);
  z-index:-1;
  opacity:0;
  padding:80px 100px;
  overflow:hidden;
  box-sizing:border-box;
  transition: top 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 500ms;  
}
.overlay-form .close-btn {
  position:absolute;
  top:20px;
  right:40px;
  color:#fff;
  font-size:40px;
  font-weight:600;
  cursor:pointer;
}
.overlay-form h1 {
  font-size:32px;
  color:#fff;
}
.overlay-form p {
  font-size:16px;
  color:#eee;
  margin:-15px 0px 30px;
}
.overlay-form .form-group {
  margin:20px 0px;
}
.overlay-form label {
  display:block;
  font-size:17px;
  color:#eee;
  margin-bottom:5px;
}
.overlay-form input {
  width:100%;
  padding:6px;
  font-size:17px;
  border:2px solid #eee;
  background:transparent;
  outline:none;
  border-radius:10px;
  color: white;
}
.overlay-form button,
.center button {
  margin-top:10px;
  width:100px;
  height:35px;
  font-size:15px;
  text-transform:uppercase;
  background:#fff;
  color:#222;
  border:none;
  outline:none;
  border-radius:10px;
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

body.activeForm .overlay-form {
  z-index:2;
  opacity:1;
  top:0px;
  height:100vh;
  transition: bottom 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 0ms;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
th{
	background-color:black;
	color:white;
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {
	background-color:#c7d5ff;
	}
</style>
<div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Staff list:</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" onclick="toggleForm()"><i class="material-icons"><img src="https://img.icons8.com/ios-glyphs/32/000000/plus.png"/></i> <span>Add New User</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple" onclick="deleted()"><i class="material-icons"><img src="https://img.icons8.com/small/32/000000/delete-forever.png"/></i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" name="all" onclick="selects()">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ID</th>
                        <th>NAME</th>
                        <th>GRADE</th>
                        <th>DEPARTMENT</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM staff");
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
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["grade"]; ?></td>
					<td><?php echo $row["department"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="openForm()" name="edit2">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-name="<?php echo $row["name"]; ?>"
							data-email="<?php echo $row["grade"]; ?>"
							data-phone="<?php echo $row["department"]; ?>"
							title="Edit"><img src="https://img.icons8.com/small/30/000000/support.png"/></i>
						</a>
						<a href="#deleteEmployeeModal" class="material-icons" data-toggle="tooltip" title="Delete" onclick="confirmation()" action="delete.php"><img src="https://img.icons8.com/small/32/000000/delete-forever.png"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div class="overlay-form">
	  <div class="close-btn" onclick="toggleForm()">&times;</div>
				<form id="user_form" action="action.php" method="post">				
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>ID</label>
							<input type="text" id="id" name="id" class="form-control" required>
						</div>
						<div class="form-group">
							<label>GRADE</label>
							<input type="text" id="grade" name="grade" class="form-control" required>
						</div>
						<div class="form-group">
							<label>DEPARTMENT</label>
							<input type="department" id="department" name="department" class="form-control" required>
						</div>
						<div class="form-group">
							<label>IC</label>
							<input type="ic" id="ic" name="ic" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>CONTACT</label>
							<input type="contact" id="contact" name="contact" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>ADDRESS</label>
							<input type="address" id="address" name="address" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>POSITION</label>
							<input type="position" id="position" name="position" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>DATE JOINED</label>
							<input type="datejoined" id="datejoined" name="datejoined" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>EMPLOYMENT STATUS</label>
							<input type="empstat" id="empstat" name="empstat" class="form-control" required>
						</div>
<button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
					</form>						
	</div>
					
	</div>
	
<script>
function toggleForm(){
  document.body.classList.toggle('activeForm');
}
</script>
<script>
function openForm(){
  document.body.classList.toggle('');
}
</script>
<script type="text/javascript">  
            function selects(){  
                var ele=document.getElementsByName('all');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('all');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             
        </script>  
	<script>
 function deleted(){
	 document.body.classList.toggle('activeForm');
 }
</script>
	</script>
</body>
</html>    