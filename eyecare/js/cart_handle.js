function addCartItem(id, price, qty){
	var iArray = [];
	var cart = localStorage.getItem("cart");
	if(cart){
		iArray = JSON.parse(cart);
	}

	iArray.push({"id":id,"price":price,"qty":qty});
	localStorage.setItem("cart", JSON.stringify(iArray));
}

function getAllItems(){
	var cart = localStorage.getItem("cart");
	if(cart){
		var iArray = JSON.parse(cart);
		return iArray;
	}	
	else{
		return;
	}
}

function removeCartItem(i){
	var index = parseInt(i);
	var cart = localStorage.getItem("cart");
	if(cart && cart.length != 0){
		var iArray = JSON.parse(cart);
		iArray.splice(index, 1);
		localStorage.setItem("cart", JSON.stringify(iArray));
	}	
}