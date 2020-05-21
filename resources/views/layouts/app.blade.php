<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin</title>

        <link rel="manifest" href="/manifest.json">

        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicona.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

        <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>

        <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-messaging.js"></script>

    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('argon') }}/js/bootstrap-notify.js"></script>
        <script src="{{ asset('argon') }}/js/custom.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <script>
        $(document).ready(function(){
            console.log('hi')
            const config = {
                apiKey: "AIzaSyC5DijeKNy3wICKc3wZpeAIrxdFt5gftvQ",
                authDomain: "myanmar-treasure-3e59d.firebaseapp.com",
                databaseURL: "https://myanmar-treasure-3e59d.firebaseio.com",
                projectId: "myanmar-treasure-3e59d",
                storageBucket: "myanmar-treasure-3e59d.appspot.com",
                messagingSenderId: "482515719435",
                appId: "1:482515719435:web:7d1ad8706fa1c802a03e0e",
                measurementId: "G-15J52S4WHT"
            };
            firebase.initializeApp(config);
            const messaging = firebase.messaging();
            messaging.usePublicVapidKey("BAuwFm-bNJS5T54CHC2vXKVzh0Ekw9zeBu7-UUMPBFPawY1lrQEnqHzE8sbg80fHBJJgevy61Jz3kaGHLhOHAHE");

            messaging
                .requestPermission()
                .then(function () {
                    return messaging.getToken()
                })
                .then(function(token) {
                    $.ajax({
                        url: '{{ URL::to('/save-device-token') }}',
                        type: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            user_id: {!! json_encode($user_id ?? '') !!},
                            fcm_token: token
                        },
                        dataType: 'JSON',
                        success: function (response) {
                            console.log(response)
                        },
                        error: function (err) {
                            console.log(" Can't do because: " + err);
                        },
                    });
                })
                .catch(function (err) {
                    console.log("Unable to get permission to notify.", err);
                });
                
        
            messaging.onMessage(function(payload) {
                console.log('got it');
                console.log(payload);
                const noteTitle = payload.notification.title;
                const noteOptions = {
                    body: payload.notification.body,
                    icon: payload.notification.icon,
                    click_action: payload.notification.click_action
                };
                myNoti.showNotification('top','right',noteOptions);
                
                // new Notification(noteTitle, noteOptions);
            });

        });
    </script>
    </body>
</html>