(function() {



const firebaseConfig = {
    apiKey: "AIzaSyDOCAbC123dEf456GhI789jKl01-MnO",
    authDomain: "myapp-project-123.firebaseapp.com",
    databaseURL: "https://myapp-project-123.firebaseio.com",
    projectId: "myapp-project-123",
    storageBucket: "myapp-project-123.appspot.com",
    messagingSenderId: "65211879809",
    appId: "1:65211879909:web:3ae38ef1cdcb2e01fe5f0c",
    measurementId: "G-8GSGZQ44ST"
  };
  firebase.initializeApp(firebaseConfig);

  //Get elements
  const txtEmail = document.getElementById('txtEmail');
  const txtPassword = document.getElementById('txtPassword');
  const btnLogin = document.getElementById('btnLogin');
  const btnSignUp = document.getElementById('btnSignUp');
  const btnLogout = document.getElementById('btnLogout');

// Add login event
  btnLogin.addEventListener('click', e => {
    // Grt email and pass
    const email = txtEmail.nodeValue;
    const pass = txtPassword.nodeValue;
    const auth = firebase.auth();
    //Sign in
    const promise = auth.signInWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
});

// Add signup event
btnSignUp.addEventListener('click', e => {
    // Grt email and pass
    //TODO: CHECK 4 REAL EMAILZ
    const email = txtEmail.nodeValue;
    const pass = txtPassword.nodeValue;
    const auth = firebase.auth();
    //Sign in
    const promise = auth.createUserWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
});

btnLogout.addEventListener('click', e => {
    firebase.auth().signOut();
});

// Add a realtime listener
firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser) {
        console.log(firebaseUser);
        btnLogout.classList.remove('hidden');
    } else {
        console.log('not logged in');
        btnLogout.classList.add('hidden');
    }
});




}());