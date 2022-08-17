var firebaseConfig = {
  apiKey: "AIzaSyB7WkUjRikYl8a_PbcoOQyRA8yhhKxzVAc",
  authDomain: "login-demo-e5e57.firebaseapp.com",
  databaseURL: "https://login-demo-e5e57.firebaseio.com",
  projectId: "login-demo-e5e57",
  storageBucket: "login-demo-e5e57.appspot.com",
  messagingSenderId: "427032565640",
  appId: "1:427032565640:web:6b47bbb689f0543978cc3d",
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
  const auth = firebase.auth();


function signUp(){
		
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    
    const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
    promise.catch(e => alert(e.message));
    promise.then(()=>{
    
        window.location.replace("./profile1.php");
        }
    )
}


	
function signIn(){
		
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    
    const promise = auth.signInWithEmailAndPassword(email.value, password.value);
    promise.catch(e => alert(e.message));
    promise.then(()=>{
    
    window.location.replace("./home.php");
    }
    )

    
    
}



function signOut(){
		
    auth.signOut();
    alert("Signed Out");
    
}

/*auth.onAuthStateChanged(function(user){
    
    if(user){
        
        var email = user.email;
        alert("Active User " + email);
        
        //Take user to a different or home page

        //is signed in
        
    }else{
        
        alert("No Active User");
        //no user is signed in
    }
    
    
    
});*/


