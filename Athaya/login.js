function onSignIn(googleUser) {
    // Get the user's ID token and basic profile information
    var id_token = googleUser.getAuthResponse().id_token;
    var profile = googleUser.getBasicProfile();
    
    // Access the user's information
    var userId = profile.getId();
    var userName = profile.getName();
    var userEmail = profile.getEmail();
    
    // Use the user's information as needed
    console.log("User ID: " + userId);
    console.log("User Name: " + userName);
    console.log("User Email: " + userEmail);
    
    // You can also send the ID token to your server for verification and authentication
    // Send the 'id_token' value to your server-side code for verification
  }
  
  function signOut() {
    // Sign out the user from Google
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function() {
      console.log('User signed out.');
    });
  }
  