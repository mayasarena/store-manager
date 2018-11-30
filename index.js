window.onload = function(){
	customerDropdown();
	productOrderDropdown();
	customerPhoneDropdown();
	customerDeleteDropdown();
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

function customerPhoneDropdown(){
	var dropdown3;
	dropdown3 = document.getElementById("pickacustomer2");
	dropdown3.addEventListener("change",getStuff);
}

function customerDeleteDropdown(){
	var dropdown4;
	dropdown4 = document.getElementById("pickacustomer3");
	dropdown4.addEventListener("change",getStuff);
}

function getStuff(){
	this.form.submit();
}
