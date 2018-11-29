window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var droppy;
 droppy = document.getElementById("pickorder");
 droppy.addEventListener("change",getArt);
}
function getArt() {
	this.form.submit();
}
