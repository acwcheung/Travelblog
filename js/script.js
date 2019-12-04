
let sidebar = document.getElementsByClassName("sidebar");
let title = document.getElementById("post-title");

sidebarFunc =  () => {
	if(document.documentElement.scrollTop > 160) {
		sidebar[0].classList.add("sidebar-fixed");	
	} else {
		sidebar[0].classList.remove("sidebar-fixed");	
	}
}

titleFunc = () => {
	if(document.documentElement.scrollTop > 230) {
		title.classList.add("small-title");
	} else {
		title.classList.remove("small-title");
	}
}

window.onscroll = () => {
	sidebarFunc();
	titleFunc();
}

