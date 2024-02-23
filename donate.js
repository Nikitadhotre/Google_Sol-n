

const firebaseConfig = {
    apiKey: "AIzaSyBRK9qc7XlYo3jFFfZaeLKPbkIXKv2l_aM",
    authDomain: "nourish-together.firebaseapp.com",
    projectId: "nourish-together",
    storageBucket: "nourish-together.appspot.com",
    messagingSenderId: "168163500855",
    appId: "1:168163500855:web:0e10c571e09d9927ebb0b2"
  };
  
  firebase.initializeApp(firebaseConfig);
  var NourishTogetherDB =firebase.database().ref('Nourish together');

  document.getElementById('NourishTogether').addEventListener("submit", submitForm);

  function(submitForm(e)){
    e.preventDefault();
    var Name = getElementByval("Name");
    var Email = getElementByval("Email");
    var Contact = getElementByval("Contact");
    var Address = getElementByval("Address");
    
    console.log(Name,Email,Contact,Address);
  }

  const getElementByval=(id)=>{
    return document.getElementById(id).value

  }