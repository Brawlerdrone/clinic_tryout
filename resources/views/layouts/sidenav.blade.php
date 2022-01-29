<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CUstom style sheet --}}
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    {{-- BOXICONS --}}
    <link rel="stylesheet" href=>
    {{-- FONTAWESOME ICONS --}}
    <link rel="stylesheet" href="">

    {{-- REMOTE ICONS TEMPORARY --}}
    <script src="https://kit.fontawesome.com/75c7cbc9da.js" crossorigin="anonymous"></script>
    <title>Welcome User</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo">
            <h2>Welcome user</h2>
            <div class="sidebar-close" id="sidebar-close">
                <i class="fas fa-arrow-left"></i>
            </div>
        </div>

        {{-- user div --}}
        <div class="sidebar-user">
            <div class="sidebar-user-info">
               <img src="{{asset('images/user-image.jpg')}}" alt="" class="profile-image"> 
                <div class="sidebar-user-name">
                    User Name goes here
                </div>
            </div>
            <a href = "" class="">
                <i class="fas fa-sign-out-alt" style="font-size : 1.25rem"></i>
            </a>
        </div>
        {{-- use div end --}}

        <div class="sidebar-menu">
            <li>
                <a href="#" class = "link ">
                    <i class="fas fa-home"></i>
                    <span>dashboard</span>
                </a>
            </li>
        </div>
    </div>
    <div class="main-section">
        @yield('content')
    </div>
</body>
</html>


    
@yield('content')