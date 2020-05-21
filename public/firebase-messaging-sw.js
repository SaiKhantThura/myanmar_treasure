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
  apiKey: "AIzaSyC5DijeKNy3wICKc3wZpeAIrxdFt5gftvQ",
    authDomain: "myanmar-treasure-3e59d.firebaseapp.com",
    databaseURL: "https://myanmar-treasure-3e59d.firebaseio.com",
    projectId: "myanmar-treasure-3e59d",
    storageBucket: "myanmar-treasure-3e59d.appspot.com",
    messagingSenderId: "482515719435",
    appId: "1:482515719435:web:7d1ad8706fa1c802a03e0e",
    measurementId: "G-15J52S4WHT"
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
// messaging.setBackgroundMessageHandler(function(payload) {
//   console.log('[firebase-messaging-sw.js] Received background message ', payload);
//   // Customize notification here
//   const notificationTitle = 'Background Message Title';
//   const notificationOptions = {
//     body: 'Background Message body.',
//     icon: '/firebase-logo.png'
//   };

//   return self.registration.showNotification(notificationTitle,
//       notificationOptions);
// });

// messaging.onMessage((payload) => {
//   console.log('Message received. ', payload);
//   // ...
// });