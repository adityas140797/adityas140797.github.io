var config = {
    apiKey: "AIzaSyDIsNts-YS5A803UDEg-pELhwtgMmICt6w",
    authDomain: "aditya-f14ee.firebaseapp.com",
    databaseURL: "https://aditya-f14ee.firebaseio.com",
    projectId: "aditya-f14ee",
    storageBucket: "aditya-f14ee.appspot.com",
    messagingSenderId: "719539654966"
  };
firebase.initializeApp(config);

function abc(){
var name = document.getElementById("name");
var age = document.getElementById("age");
var phone = document.getElementById("phone");

var submitBtn = document.getElementById("submitBtn");	
var name = name.value;
var age = age.value;
var phone = phone.value;
var a = "yes";

var user = firebase.auth().currentUser;
var uid = user.uid;
var firebaseRef = firebase.database().ref('Users').child(uid);

firebase.auth().currentUser.sendEmailVerification()

var data = {
name: name,
age: age,
phone: phone,
a: a
}

firebaseRef.set(data);
}

function genQRcode() {
var user = firebase.auth().currentUser;
var uid = user.uid;
var ab = user.displayName;
var message;
var firebaseRef = firebase.database().ref('Payment').child(uid);

firebaseRef.on('value', function(snapshot) {
   message = snapshot.val();

    var data = encodeURIComponent(uid+"\n\n:"+"Name"+" : "+message.Name+"\n\n"+"Source"+" : "+message.Source+"\n\n"+"Destination"+" : "+message.Destination+"\n\n"+"Booking Date"+" : "+message.Booking_Date+"\n\n"+"Booking Time"+" : "+message.Booking_Time+"\n\n"+"Source Location"+" : "+message.Source_Longitude+","+message.Source_Latitude+"\n\n"+"Destination Location"+" : "+message.Destination_Longitude+","+message.Destination_Latitude),
      size = document.getElementById("size").value,
      chart = "http://chart.googleapis.com/chart?cht=qr&chs=" + size + "x" + size + "&choe=UTF-8&chld=L|0&chl=" + data;
    if (data === "") {
      alert("Please enter a valid data!");
      textarea.focus();
      content.style.display = "none";
    } else {
      content.style.display = "";
      document.getElementById("qrcode").src = chart;
      document.getElementById("qrcode-url").value = chart;
    }
	});
  }

  document.addEventListener("keydown", function(e) {
    if (e.ctrlKey && e.keyCode == 13) {
      genQRcode();
    }
  });