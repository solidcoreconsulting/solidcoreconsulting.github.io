var profile;

function onSignIn(googleUser) {
	profile = googleUser.getBasicProfile();
	window.location.href = 'test.html';
}

function signOut() {
	gapi.load('auth2', function() {
		gapi.auth2.init(name).then(function(){
			gapi.auth2.getAuthInstance().signOut().then(function () {
				gapi.auth2.getAuthInstance().disconnect();
				window.location.href = "index.html"
			});
		});
	})
	console.log('User signed out.');
}

function print(){
	document.write('ID: ' + profile.getId() +  "<br>"); // Do not send to your backend! Use an ID token instead.
	document.write('Name: ' + profile.getName()+  "<br>");
	document.write('Image URL: ' + profile.getImageUrl()+  "<br>");
	document.write('Email: ' + profile.getEmail()+  "<br>"); // This is null if the 'email' scope is not present.
}
