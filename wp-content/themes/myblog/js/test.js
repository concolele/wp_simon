// ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
// ' ﾌｧｲﾙ名：test.js
// ' 備　考：
// ' 作成日：2018/04/11 ... Vinh
// ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''

var clickMenuHeader = true;//sub-menu-content of down-menu
var clickMenu = true;//sub-menu-content of down-menu

function clickMenuMobile(id){	
	if(clickMenuHeader){
		document.getElementById(id).style.display = "inline-block";
		clickMenuHeader = false;
	}else{
		document.getElementById(id).style.display = "none";
		clickMenuHeader = true;
	}
}

function dropdownMobile(id){	
	if(clickMenu){
		document.getElementById(id).style.display = "inline-block";
		clickMenu = false;
	}else{
		document.getElementById(id).style.display = "none";
		clickMenu = true;
	}
}

var $lba = document.getElementsByClassName('click-menu');
for(var i=0; i < $lba.length; i++) $lba[i].onclick = function() {
    clickMenuMobile("main-menu");
}

var $lba1 = document.getElementsByClassName('down-menu');
for(var i=0; i < $lba1.length; i++) $lba1[i].onclick = function() {
    dropdownMobile("sub-menu-content");
}