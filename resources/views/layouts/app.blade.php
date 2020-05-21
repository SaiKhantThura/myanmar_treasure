<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin</title>
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
            const config = {
                apiKey: "AIzaSyAt17cRDm6O0jBr5_AWwKVOKxkqu5Cd5-U",
				authDomain: "shwepalin-25d94.firebaseapp.com",
				databaseURL: "https://shwepalin-25d94.firebaseio.com",
				projectId: "shwepalin-25d94",
				storageBucket: "shwepalin-25d94.appspot.com",
				messagingSenderId: "509437086415",
				appId: "1:509437086415:web:8319facfece4ae53a085ba",
				measurementId: "G-DYNG3B76ZN"
            };
            firebase.initializeApp(config);
            const messaging = firebase.messaging();
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