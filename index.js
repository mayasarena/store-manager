window.onload = function(){
	customerDropdown();
	productOrderDropdown();
}

function customerDropdown(){
	var dropdown1;
	dropdown1 = document.getElementById("pickacustomer");
	dropdown1.addEventListener("change",getStuff);
}

function productOrderDropdown(){
	var dropdown2;
	dropdown2 = document.getElementById("pickorder");
	dropdown2.addEventListener("change",getStuff);
}

function getStuff(){
	this.form.submit();
}
