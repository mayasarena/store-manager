//on window load, run all these functions
window.onload = function(){
	customerDropdown();
	productOrderDropdown();
	customerPhoneDropdown();
	customerDeleteDropdown();
	customerImageDropdown();
}

//dropdown menus for various things... 
//dropdown for customer info
function customerDropdown(){
	var dropdown1;
	dropdown1 = document.getElementById("pickacustomer");
	if(dropdown1){
  		dropdown1.addEventListener("change", getStuff);
	}
}

//dropdown for product order (ascending, descending)
function productOrderDropdown(){
	var dropdown2;
	dropdown2 = document.getElementById("pickorder");
	if(dropdown2){
  		dropdown2.addEventListener("change", getStuff);
	}
}

//dropdown for updating customer phone number
function customerPhoneDropdown(){
	var dropdown3;
	dropdown3 = document.getElementById("pickacustomer2");
	if(dropdown3){
  		dropdown3.addEventListener("change", getStuff);
	}
}

//dropdown for deleting a customer
function customerDeleteDropdown(){
	var dropdown4;
	dropdown4 = document.getElementById("pickacustomer3");
	if(dropdown4){
  		dropdown4.addEventListener("change", getStuff);
	}
}

//dropdwon for updating customer image
function customerImageDropdown(){
	var dropdown5;
	dropdown5 = document.getElementById("pickacustomer4");
	if(dropdown5){
  		dropdown5.addEventListener("change", getStuff);
	}
}

//submits the form
function getStuff(){
	this.form.submit();
}
