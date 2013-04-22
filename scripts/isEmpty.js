function isEmpty() {
	var form = document.getElementById("register");
	var fields = form.children(); var errors;
	var size = fields.size();
	alert(size);
}