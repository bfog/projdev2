"use strict"; //prevents global variables

//Validate Data to ensure it's of the correct type
function validateNewSale() {
	//init local variables
	var errMsg = "";
	var result = true;
	var identifier = document.getElementById("saleID").value;
	var quantity = document.getElementById("quantity").value;
	//trim whitespace from either side of input
	identifier = identifier.trim();
	quantity = quantity.trim();
	//validate identifier field
	if (!identifier.match(/^[a-zA-Z0-9 ]+$/)) {
		errMsg += "The ID / Name field was entered incorrectly.\n";
		result = false;
	}
	if (identifier == "") {
		errMsg += "Please add an identifier to the sale.\n";
		result = false;
	}
	//validate quantity field
	if (isNaN(quantity)) {
		errMsg += "Quantity must be a number.\n";
		result = false;
	}
	if (quantity < 1) {
		errMsg += "Quantity must be greater than zero.\n";
		result = false;
	}
	if (quantity > 10000) {
		errMsg += "Quantity inputted is too high.\n";
		result = false;
	}
	//Check for errors and return message
	if (errMsg != "") {
		alert(errMsg);
	}
	//Return result (lets submission pass or fail)
	return result;
}

function validateNewProduct() {
	//init local variables
	var errMsg = "";
	var result = true;
	var name = document.getElementById("prodName").value;
	var category = document.getElementById("categories").value;
	var stock = document.getElementById("stock").value;
	var price = document.getElementById("price").value;
	//trim whitespace from either side of input
	name = name.trim();
	stock = stock.trim();
	price = price.trim();
	//get correct precision on price
	price = parseFloat(price).toFixed(2);
	//validate name
	if (name == "") {
		errMsg += "Please enter a name for the product.\n";
		result = false;
	}
	if (!name.match(/^[a-zA-Z0-9 .-]+$/)) {
		errMsg += "Invalid characters in name.\nOnly alphanumeric characters, spaces hyphens and dots are allowed.\n";
		result = false;
	}
	if (name.length > 30) {
		errMsg += "Name is too long.\n";
		result = false;
	}
	//validate category
	//if a placeholder value gets put in html
	//check that its not that value here

	//validate stock
	if (stock % 1 != 0) {
		errMsg += "Stock cannot be a decimal.\n";
		result = false;
	}
	if (stock < 1) {
		errMsg += "Stock must be greater than zero.\n";
		result = false;
	}
	if (stock > 10000) {
		errMsg += "Too much stock inputted.\n";
		result = false;
	}
	if (isNaN(stock)) {
		errMsg += "Stock must be a number.\n";
		result = false;
	}
	//validate price
	if (price <= 0) {
		errMsg += "Price must be greater than zero.\n";
		result = false;
	}
	if (isNaN(price)) {
		errMsg += "Price must be a number.\n";
		result = false;
	}
	//Check for errors and return message
	if (errMsg != "") {
		alert(errMsg);
	}
	//Return result (lets submission pass or fail)
	return result;
}

//Set up validation
function init() {
	var addSaleForm = document.getElementById("addSaleForm");
	var addProductForm = document.getElementById("addProductForm");
	addSaleForm.onsubmit = validateNewSale;
	addProductForm.onsubmit = validateNewProduct;
}

//Call init on startup
window.onload = init;