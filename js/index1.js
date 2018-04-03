var config = {
    apiKey: "AIzaSyACzgb4GOcf3QBF-KD6bGgfp6uCTo_O4i0",
    authDomain: "jolt-225c6.firebaseapp.com",
    databaseURL: "https://jolt-225c6.firebaseio.com",
    projectId: "jolt-225c6",
    storageBucket: "jolt-225c6.appspot.com",
    messagingSenderId: "471829128980"
  };
firebase.initializeApp(config);

function aabb(){

var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear();
 var date = day + "/" + month + "/" + year;

	var currentTime = new Date(),
      hours = currentTime.getHours(),
      minutes = currentTime.getMinutes();

	if (minutes < 10) {
	 minutes = "0" + minutes;
  }
	var time = hours + ":" + minutes;
var s1="";
var s2="";
var d1="";
var d2="";
var b = document.getElementById("origin-input");
var c = document.getElementById("destination-input");
//var a = document.getElementById("dm");

var a = sessionStorage.getItem("clickcountes");

if(document.getElementById("SLat")){
s1=document.getElementById("SLat").value;
}
if(document.getElementById("SLon")){
s2=document.getElementById("SLon").value;
}
if(document.getElementById("DLat")){
d1=document.getElementById("DLat").value;
}
if(document.getElementById("DLon")){
d2=document.getElementById("DLon").value;
}

var submitBtn = document.getElementById("submit");	

var b = b.value;
var c = c.value;
//var a = a.value;

var user = firebase.auth().currentUser;
var ab = user.displayName;
var uid = user.uid;

var firebaseRef = firebase.database().ref('Payment').child(uid);

var data = {
NAME: ab,
From: b,
To: c,
Booking_Date: date,
Booking_Time: time,
S: "lat/lng: ("+d1+","+s1+")",
DEST: "lat/lng: ("+d2+","+s2+")",
Fare: a
}

firebaseRef.set(data);
}