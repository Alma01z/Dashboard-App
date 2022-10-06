$(window).on("hashchange", function () {
	if (location.hash.slice(1) == "employee") {
		$(".page").addClass("extend");
		$("#admin").removeClass("active");
		$("#employee").addClass("active");
	} else {
		$(".page").removeClass("extend");
		$("#admin").addClass("active");
		$("#employee").removeClass("active");
	}
});
$(window).trigger("hashchange");

function validateAdminForm() {
	var name = document.getElementById("AdminName").value;
	var password = document.getElementById("AdminPassword").value;

	if (name == "" || password == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 5) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 5 characters"
		return false;
	}
	else if(name == "admin" && password == "admin123")  {
    location.href = "index.php";
	}
  else{
  alert('Wrong Username or Password!');
   return false;
 }
}

function validateEmployeeForm() {
	var name = document.getElementById("EmployeeName").value;
	var password = document.getElementById("EmployeePassword").value;

  
	if (name == "" || password == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 5) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 5 characters"
		return false;
	}
	else if(name == "employee" && password == "employee123")  {
    location.href = "daily-employee.php";
	}
  else{
  alert('Wrong Username or Password!');
   return false;
 }
  
}