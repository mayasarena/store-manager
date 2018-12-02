window.onload = function(){
	customerDropdown();
	productOrderDropdown();
	customerPhoneDropdown();
	customerDeleteDropdown();
	customerImageDropdown();
	alert("everything should be working");
}

function customerDropdown(){
	var dropdown1;
	dropdown1 = document.getElementById("pickacustomer");
	if(dropdown1){
  		dropdown1.addEventListener("change", getStuff);
	}
}

function productOrderDropdown(){
	var dropdown2;
	dropdown2 = document.getElementById("pickorder");
	if(dropdown2){
  		dropdown2.addEventListener("change", getStuff);
	}
}

function customerPhoneDropdown(){
	var dropdown3;
	dropdown3 = document.getElementById("pickacustomer2");
	if(dropdown3){
  		dropdown3.addEventListener("change", getStuff);
	}
}

function customerDeleteDropdown(){
	var dropdown4;
	dropdown4 = document.getElementById("pickacustomer3");
	if(dropdown4){
  		dropdown4.addEventListener("change", getStuff);
	}
}

function customerImageDropdown(){
	var dropdown5;
	dropdown5 = document.getElementById("pickacustomer4");
	if(dropdown5){
  		dropdown5.addEventListener("change", getStuff);
	}
}

function getStuff(){
	this.form.submit();
}
