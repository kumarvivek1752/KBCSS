<!doctype html>
<meta charset="utf-8">
<?php   
 include 'hometemp.php'
 //if(logged_in() === false) {}
?>
<title> Enroll for courses </title>
<body>
<div id="enroll_form">
<form  action="dept_chosen.php" method="post">
<div id="enroll">
Department: 
<select id="dept" name="dept" onchange="makeCourse();">
<option value="ECE">ECE</option>
<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
</select><br><br>
</div>
<input type="submit" id="dept_submit" value="Select department">
</form>
</div>
<script type="text/javascript">    
makeCourse();
function makeCourse() { 
var i;
var formdiv = document.getElementById("enroll");
var dept = document.getElementById("dept"); 
var courses;
var cse = [ "Operating Systems", "DBMS", "Networks" ];
var ece= [ "Analog Systems", "VLSI Design", "Circuits"];
var eee = [" Microprocessors", "Circuits", "CompArch"];
if(dept.value =="CSE")
arr = cse; 
if(dept.value =="ECE")
arr = ece;
if(dept.value =="EEE")
arr = eee;
//var course = document.getElementsByClassName("course_options");
//alert(course[0]);
var textNode = document.createTextNode("Courses in "+dept.value+ ":" );
formdiv.appendChild(textNode);
var field = document.createElement('div');
var br = document.createElement('br');
field.setAttribute('class', "course_options");
var options;
for(i=0; i<3; i++) {
	options = document.createElement('button');
	options.setAttribute('value',arr[i]);
	textNode = document.createTextNode(arr[i]);
	options.appendChild(textNode);
	field.appendChild(options);
}	
formdiv.appendChild(field);
formdiv.appendChild(br);
}
//field.innerHTML = "<option value='CSE 101' > CSE 101 </option>";
//setInterval(makeCourse(), 100);

</script>

