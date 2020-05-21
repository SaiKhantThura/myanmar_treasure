/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
  apiKey: "AIzaSyCqgsY89aHj-HId7eY7zZ7pFi4q-iOn8Dc",
  authDomain: "myanmar-treasure-4738b.firebaseapp.com",
  databaseURL: "https://myanmar-treasure-4738b.firebaseio.com",
  projectId: "myanmar-treasure-4738b",
  storageBucket: "myanmar-treasure-4738b.appspot.com",
  messagingSenderId: "831127853700",
  appId: "1:831127853700:web:10b1d693217b727e0bc0d1"
});