//Clear form fields if confirm return true
function clearPost() {
	if(confirm("Click 'ok' to clear the blog.")) {
		document.getElementById('title').value = '';
		document.getElementById('blogDetails').value = '';
	}
}

//Check if blog is empty.
function postPost(form) {
	var title = form.title.value;
	var content = form.blogDetails.value;

	if(title == '') {
		//if feild is empty, prevent submission of the form
		event.preventDefault();
		document.getElementById("title").style.borderColor = "red";
	} else {
		document.getElementById("title").style.borderColor = "white";
	}

	if(content == '') {
		event.preventDefault();
		document.getElementById("blogDetails").style.borderColor = "red";
	} else {
		document.getElementById("blogDetails").style.borderColor = "white";
	}
}

// return to viewBlog.php
function discardPost() {
	if(confirm("Click 'ok' to return to the blog page.")) {
		window.location = "viewBlog.php";
	}
}