function setCookie() {
	var todolist = document.getElementsByClassName("to_do");
	var cook;
	for (var i = 0; i < todolist.length; i++) {
		cook += "^D^" + todolist[i].innerHTML;
	}
	document.cookie = cook;
}

function checkCookie() {
	console.log("CheckCookie");
	console.log(document.cookie);
	var cook = document.cookie;
	if (cook) {
		var lines = cook.split(";")[0].split("^D^");
		console.log(lines);
		for (var i = lines.length - 1; i > 0; i--) {
			console.log(lines[i]);
			create_div(lines[i]);
		}
	}
}

function set_task() {
	var task = prompt("To-do", "Description de la tâche");
	if (task != null) {
		create_div(task);
	}
	setCookie();
}

function create_div(value) {
		var body = document.getElementById("ft_list")
		var to_do = document.createTextNode(value);
		var element = document.createElement("div");
		element.setAttribute("onclick", "delete_todo()");
		element.setAttribute("class", "to_do");
		element.appendChild(to_do);
		body.insertBefore(element, body.childNodes[0]);
}

function delete_todo() {
	console.log(event.target.nodeName);
	var message = "Êtes vous sur de vouloir supprimer la tâche: \n" + event.target.textContent;
	var conf = confirm(message);
	if (conf == true) {
	var parent = document.getElementById("ft_list");
	parent.removeChild(event.target);
	setCookie();
	}
}