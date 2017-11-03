document.addEventListener('load', OpenStore(), "once");


function OpenStore(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("ProductDiv");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/Products.php");
	xhr.send(null);
}

function searchStore(search) {
	
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("ProductDiv");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/StoreSearch.php?search=" + search);
	xhr.send(null);
}

function catStore(search) {

	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("ProductDiv");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/CatSearch.php?search=" + search);
	xhr.send(null);
}

function closeUp(item){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("ProductDiv");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/closeUp.php?item=" + item);
	xhr.send(null);
}

function validateMyForm(search){
	
	if (search == ""){
		alert("Cannot search nothing!!");
		return false;
	}else{
		searchStore(search);
	}
	
}

function addToCart(product, price){
	var amount = document.getElementById('amount');
	var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			alert(run);
			}
		}
		xhr.open("GET", "php/addToCart.php?prod="+product+"&amo="+amount.value+"&pri="+price);
		xhr.send(null);	

}


