window.onload=checkLoggedIn();

function checkLoggedIn(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			
			if(run == 'true')
				showCart();
			else if(run == 'false')
				alert("You must log in to see your cart");
		}
	}
	
	xhr.open("GET", "php/checkloggedin.php");
	xhr.send(null);
}

function showCart(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("cart");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/cart.php");
	xhr.send(null);
}

function submitOrder(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("cart");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/submitOrder.php");
	xhr.send(null);
	
}

function resetOrder(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("cart");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/resetOrder.php");
	xhr.send(null);
}