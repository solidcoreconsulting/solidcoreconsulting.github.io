var profile;

function onSignIn(googleUser) {
	profile = googleUser.getBasicProfile();
	window.location = 'test.html';
}

function signOut() {
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function () {
		console.log('User signed out.');
	});
	// auth2.signOut().then(function () {
	//
	// });
}

function print(){
	document.write('ID: ' + profile.getId() +  "<br>"); // Do not send to your backend! Use an ID token instead.
	document.write('Name: ' + profile.getName()+  "<br>");
	document.write('Image URL: ' + profile.getImageUrl()+  "<br>");
	document.write('Email: ' + profile.getEmail()+  "<br>"); // This is null if the 'email' scope is not present.
}
