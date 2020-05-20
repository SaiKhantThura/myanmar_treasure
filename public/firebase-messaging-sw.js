/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.2/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
  apiKey: "AIzaSyAt17cRDm6O0jBr5_AWwKVOKxkqu5Cd5-U",
  authDomain: "shwepalin-25d94.firebaseapp.com",
  databaseURL: "https://shwepalin-25d94.firebaseio.com",
  projectId: "shwepalin-25d94",
  storageBucket: "shwepalin-25d94.appspot.com",
  messagingSenderId: "509437086415",
  appId: "1:509437086415:web:8319facfece4ae53a085ba",
  measurementId: "G-DYNG3B76ZN"
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();