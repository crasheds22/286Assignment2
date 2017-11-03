window.onload=checkLoggedIn();


function checkLoggedIn(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			
			if(run == 'true')
				showLoggedIn();
			else if(run == 'false')
				showRegAndLog();
		}
	}
	
	xhr.open("GET", "php/checkloggedin.php");
	xhr.send(null);
}

function showLoggedIn(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("forms");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/loggedin.php");
	xhr.send(null);
}

function showRegAndLog(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("forms");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/regandlog.php");
	xhr.send(null);
}




function validateAndRegister(){
	var uname = document.getElementById('RegUsername');
	var fnam = document.getElementById('fName');
	var lnam = document.getElementById('lName');
	var add = document.getElementById('address');
	var phon = document.getElementById('phon');
	var emai = document.getElementById('email');
	var pass = document.getElementById('RegPass');
	var flag = true;
	
	
	if(uname.value == ""){
		alert("Must enter a Username!");
		flag = false;
	}
	if(fnam.value == ""){
		alert("Must enter a firstname!");
		flag = false;
	}
	if(lnam.value == ""){
		alert("Must enter a lastname!");
		flag = false;
	}
	if(add.value == ""){
		alert("Must enter a address!");
		flag = false;
	}
	if(phon.value == ""){
		alert("Must enter a phone number!");
		flag = false;
	}
	if(emai.value == ""){
		alert("Must enter a email!");
		flag = false;
	}
	if(pass.value == ""){
		alert("Must enter a password!");
		flag = false;
	}		
	
	if(flag){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200){
			var divDom = document.getElementById("regdiv");
			divDom.innerHTML = xhr.responseText;
		}
	}
	
	xhr.open("GET", "php/insert.php?uname="+uname.value+"&fnam="+fnam.value+"&lnam="+lnam.value+
	"&add="+add.value+"&phon="+phon.value+"&emai="+emai.value+"&pass="+pass.value);
	xhr.send(null);	
	}
	
	return flag;
}

function validateAndLogin(){
	var uname = document.getElementById('LogUsername');
	var pass = document.getElementById('LogPass');
	var flag = true;
	
	
	if(uname.value == ""){
		alert("Must enter a Username!");
		flag = false;
	}
	if(pass.value == ""){
		alert("Must enter a password!");
		flag = false;
	}		
	
	if(flag){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			if(run == 'true')
				showLoggedIn();
			else
				alert(run);
		}
	}
	
	xhr.open("GET", "php/login.php?uname="+uname.value+"&pass="+pass.value);
	xhr.send(null);	
	}
	
	return flag;
}

function updateDetails(){
	var fnam = document.getElementById('fName');
	var lnam = document.getElementById('lName');
	var add = document.getElementById('address');
	var phon = document.getElementById('phon');
	var emai = document.getElementById('email');
	var pass = document.getElementById('RegPass');
	var flag = true;
	
	
	if(fnam.value == ""){
		alert("Must enter a firstname!");
		flag = false;
	}
	if(lnam.value == ""){
		alert("Must enter a lastname!");
		flag = false;
	}
	if(add.value == ""){
		alert("Must enter a address!");
		flag = false;
	}
	if(phon.value == ""){
		alert("Must enter a phone number!");
		flag = false;
	}
	if(emai.value == ""){
		alert("Must enter a email!");
		flag = false;
	}
	if(pass.value == ""){
		alert("Must enter a password!");
		flag = false;
	}		
	
	if(flag){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			alert(run);
		}
	}
	
	xhr.open("GET", "php/update.php?fnam="+fnam.value+"&lnam="+lnam.value+
	"&add="+add.value+"&phon="+phon.value+"&emai="+emai.value+"&pass="+pass.value);
	xhr.send(null);	
	}
	
	showLoggedIn();
	
	return flag;
}

function addUpCust(){
	var uname = document.getElementById('upUsername');
	var fnam = document.getElementById('upfName');
	var lnam = document.getElementById('uplName');
	var add = document.getElementById('upaddress');
	var phon = document.getElementById('upphon');
	var emai = document.getElementById('upemail');
	var pass = document.getElementById('upPass');
	var typ = document.getElementById('upType');
	var flag = true;
	
	
	if(uname.value == ""){
		alert("Must enter a Username!");
		flag = false;
	}
	if(fnam.value == ""){
		alert("Must enter a firstname!");
		flag = false;
	}
	if(lnam.value == ""){
		alert("Must enter a lastname!");
		flag = false;
	}
	if(add.value == ""){
		alert("Must enter a address!");
		flag = false;
	}
	if(phon.value == ""){
		alert("Must enter a phone number!");
		flag = false;
	}
	if(emai.value == ""){
		alert("Must enter a email!");
		flag = false;
	}
	if(pass.value == ""){
		alert("Must enter a password!");
		flag = false;
	}		
	
	if(flag){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			alert(run);
		}
	}
	
	xhr.open("GET", "php/addUpCust.php?uname="+uname.value+"&fnam="+fnam.value+"&lnam="+lnam.value+
	"&add="+add.value+"&phon="+phon.value+"&emai="+emai.value+"&pass="+pass.value+"&typ="+typ.value);
	xhr.send(null);	
	}
	
	return flag;
}

function addUpProd(){
	var prod = document.getElementById('prodname');
	var pric = document.getElementById('price');
	var cat = document.getElementById('category');
	var col = document.getElementById('colour');
	var des = document.getElementById('description');

	var flag = true;
	
	
	if(prod.value == ""){
		alert("Must enter a product name!");
		flag = false;
	}
	if(pric.value == ""){
		alert("Must enter a price!");
		flag = false;
	}
	if(cat.value == ""){
		alert("Must enter a category!");
		flag = false;
	}
	if(col.value == ""){
		alert("Must enter a colour!");
		flag = false;
	}
	if(des.value == ""){
		alert("Must enter a description!");
		flag = false;
	}		
	
	if(flag){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200){
			var run = xhr.responseText;
			alert(run);
		}
	}
	
	xhr.open("GET", "php/addUpProd.php?prod="+prod.value+"&pric="+pric.value+"&cat="+cat.value+
	"&col="+col.value+"&des="+des.value);
	xhr.send(null);	
	}
	
	return flag;
}
