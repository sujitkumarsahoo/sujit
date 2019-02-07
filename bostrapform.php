<!DOCTYPE html>
<html>
<head>
<title>Register</title>    
    <link rel="shortcut icon"  href="pl.jpg">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <script type="text/javascript"  src="js/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
    <style type="text/css">
    
    .panel h3
        {
         text-align: center;
        font-family: Bradley Hand ITC;
            font-weight:bolder;
            font-size: 40px;
            color: crimson;
        }
		.panel-heading
		{
			background-color:darkkhaki;
		}
        .panel-body
        {
            background-color:white;
        }
		.container .table .panel .panel-body
		{
			height:700px;
}
    </style>
    </head>
    <body>
		<div class="container">
        <table class="table">
      
			
    <div class="panel ">
      <div class="panel-heading">
        <h3>Academic Details</h3>
        </div>  
       <div class="panel-body">
           
        <form class="form form-horizontal" onsubmit="return fun()" action=""><span id="4" style="color:red"> </span>
          <div class="form-group">
            <label for="fname" class="col-sm-2 control-label" > First Name</label>
            <div class="col-sm-4">
				<input type="text" class="form-control" id="fname"  value="" placeholder="First Name" name="first_name" required  ><span id="1" style="color:red"> </span>
              </div>
            </div> 
            <div class="form-group">
            <label for="mname" class="col-sm-2 control-label">Middle Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="middle_name" >
              </div>
            </div> 
            <div class="form-group">
            <label for="lname" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="lname"  value=""  placeholder="Last Name" name="last_name" required><span id="2" style="color:red"> </span>
              </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label" >Gender</label>
            <div class="col-sm-4">
                <div class="radio-inline">
                <label>
                 <input type="radio" name="gender" value="male" >
                    Male</label>
                </div>
                <div class="radio-inline">
                <label>
                 <input type="radio" name="gender" value="female" >
                    Female</label>
                </div>
              </div>
            </div> 
            <div class="form-group">
            <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="dob"  name="dob" required >
              </div>
            </div>
            <div class="form-group">
            <label for="reg" class="col-sm-2 control-label">University ID</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="reg" placeholder="Registration Number" name="universityid" required><span id="3" style="color:red"> </span>
              </div>
            </div>
            <div class="form-group">
            <label for="Course" class="col-sm-2 control-label">Stream</label>
            <div class="col-sm-4">
               <select class="form-control" name="stream" >
                <center><option>-select-</option>
                <option value="B.tech">B.Tech</option>
                <option value="M.Tech">M.Tech</option>
                <option value="MBA">MBA</option>
                <option value="MCA">MCA</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
				<option value="BSC">BSC</option>
                <option value="B.COM">B.Com</option>
                </select>
              </div>
            </div>
            <div class="form-group">
            <label for="Branch" class="col-sm-2 control-label">Branch</label>
            <div class="col-sm-4">
              <select class="form-control" name="branch" >
                <option>-select-</option>
                <option value="CSE">CSE</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Civil">Civil</option>
                <option value="EEE">EEE</option>
                <option value="EE">EE</option>
                <option value="ECE">ECE</option>
                <option value="Chemical">Chemical</option>
                <option value="Mining">Mining</option>
                <option value="ETC">ETC</option>
                </select>
              </div>
            </div>
            <div class="form-group">
            <label for="Sem" class="col-sm-2 control-label">Semester</label>
            <div class="col-sm-4">
              <select class="form-control" name="semester" >
                <option>-select-</option>
                <option value="1st">1</option>
                <option value="2nd">2</option>
                <option value="3rd">3</option>
                <option value="4th">4</option>
                <option value="5th">5</option>
                <option value="6th">6</option>
                <option value="7th">7</option>
                <option value="8th">8</option>
                </select>
              </div>
            </div>
            
               <div class="form-group">
            <label for="join" class="col-sm-2 control-label">Year of joining</label>
            <div class="col-sm-4">
              <select class="form-control" name="yearofjoining" >
                <option>-select-</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                </select>
              </div>
            </div>
                
            <div class="form-group">
            <label for="back" class="col-sm-2 control-label">Backlog</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="back" name="backlog" required >
              </div>
            </div>
            <div class="form-group">
            <label for="state" class="col-sm-2 control-label">State</label>
            <div class="col-sm-4">
              <select class="form-control" name="state" >
                  <option>-select-</option>
                <option value="Odisha">Odisha</option>
                <option value="AndhraPradesh">AndhraPradesh</option>
                <option value="Kerala">Kerala</option>
                <option value="Tamilnadu">Tamilnadu</option>
                <option value="MadhyaPradesh">MadhyaPradesh</option>
              </select>
              </div>
            </div> 
            <div class="form-group">
            <label for="10th" class="col-sm-2 control-label" >10th %</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="percentage" name="ten"  required>
              </div>
            </div>
            <div class="form-group">
            <label for="12th" class="col-sm-2 control-label" >12th %</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="percentage" name="twelve"  required>
              </div>
				 <div class="form-group">
            <label for="12th" class="col-sm-2 control-label" >Current CGPA</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="current cgpa" name="cgpa" required >
				<div class="gd">
				<center><button class="btn btn-success" type="submit" name="submit">submit</button></center>
					</div>
            </div>
					<!--- <div class="form-group">
            <label for="cv" class="col-sm-2 control-label">image</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" >
              </div>--->
            </div>
				 </form>
            </div>
              
        </div> 
        </div>
    		
</table>
</div>
<script src="form.js"></script>
</body>
</html>