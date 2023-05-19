<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        {{-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 150px">
                            <g clip-path="url(#clip0)" fill="#EF3B2D">
                                <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
                            </g>
                        </svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="216" height="41" viewBox="0 0 216 41" fill="none">
                            <g clip-path="url(#clip0_1540_11765)">
                            <path d="M20.3117 41C31.5296 41 40.6234 31.8218 40.6234 20.5C40.6234 9.17816 31.5296 0 20.3117 0C9.09387 0 0 9.17816 0 20.5C0 31.8218 9.09387 41 20.3117 41Z" fill="#574AFF"/>
                            <path d="M35.514 20.4994C35.514 20.4994 34.3327 21.8994 31.8293 22.5201C31.3146 22.6486 30.7727 22.5775 30.3094 22.3205L24.4356 19.0665C21.6396 17.5188 18.2584 17.4204 15.4136 18.8697C15.3567 18.8997 15.2998 18.9271 15.2429 18.9572C15.2429 18.9572 16.6626 17.1278 18.8436 15.8235C20.8566 14.6204 23.5172 13.8629 26.3105 15.4024C26.3159 15.4024 26.3213 15.4079 26.3267 15.4106L35.5113 20.4966L35.514 20.4994Z" fill="white"/>
                            <path d="M5.10742 20.5051C5.10742 20.5051 6.28868 19.1051 8.79209 18.4844C9.30686 18.3559 9.84872 18.427 10.312 18.684L16.1858 21.938C18.9818 23.4857 22.363 23.5841 25.2078 22.1349C25.2647 22.1048 25.3216 22.0774 25.3785 22.0474C25.3785 22.0474 23.9588 23.8767 21.7778 25.181C19.7648 26.3842 17.1043 27.1416 14.311 25.6021C14.3055 25.6021 14.3001 25.5966 14.2947 25.5939L5.11013 20.5079L5.10742 20.5051Z" fill="white"/>
                            <path d="M51.1819 27.7647C50.3068 27.4038 49.6078 26.8678 49.0849 26.1569C48.562 25.4487 48.2857 24.5928 48.2559 23.5947H52.1708C52.2277 24.158 52.4228 24.5901 52.7506 24.8881C53.0811 25.1862 53.5119 25.3338 54.043 25.3338C54.574 25.3338 55.0183 25.2081 55.3353 24.9537C55.6496 24.7022 55.8094 24.3494 55.8094 23.901C55.8094 23.5236 55.6848 23.2147 55.4328 22.9686C55.1809 22.7225 54.8747 22.5201 54.509 22.3615C54.1432 22.2029 53.623 22.0224 52.9484 21.8174C51.973 21.5138 51.1765 21.2103 50.5588 20.9041C49.9411 20.6005 49.41 20.1521 48.9657 19.5587C48.5214 18.9654 48.2992 18.1915 48.2992 17.2345C48.2992 15.8153 48.8086 14.7051 49.8273 13.9012C50.846 13.0973 52.1735 12.6953 53.8072 12.6953C55.441 12.6953 56.8119 13.0973 57.8306 13.9012C58.8493 14.7051 59.3938 15.8235 59.467 17.2563H55.487C55.4572 16.7641 55.2784 16.3759 54.9506 16.0942C54.62 15.8126 54.1974 15.6704 53.6799 15.6704C53.2356 15.6704 52.8752 15.7907 52.6043 16.0286C52.3307 16.2665 52.1952 16.611 52.1952 17.0595C52.1952 17.5517 52.4255 17.9345 52.8834 18.2107C53.3412 18.4868 54.0592 18.7821 55.0346 19.1021C56.0099 19.4357 56.801 19.7529 57.4133 20.0564C58.0229 20.3599 58.5512 20.8029 58.9956 21.3799C59.4399 21.9596 59.6621 22.7033 59.6621 23.6166C59.6621 24.5299 59.4426 25.2737 59.0064 25.9846C58.5675 26.6928 57.9335 27.2589 57.1018 27.6772C56.27 28.0983 55.2865 28.3062 54.154 28.3062C53.0215 28.3062 52.0597 28.1257 51.1846 27.762L51.1819 27.7647Z" fill="white"/>
                            <path d="M72.095 20.2451C71.694 20.9752 71.0763 21.5658 70.2445 22.0142C69.4128 22.4627 68.3805 22.6869 67.1451 22.6869H64.8638V28.1585H61.1846V12.9141H67.1451C68.3507 12.9141 69.3694 13.1246 70.2012 13.543C71.0329 13.9641 71.6561 14.541 72.0733 15.2793C72.4878 16.0176 72.6964 16.8653 72.6964 17.8196C72.6964 18.7028 72.496 19.5095 72.095 20.2396V20.2451ZM68.4374 19.2361C68.7815 18.9025 68.9549 18.4321 68.9549 17.8251C68.9549 17.2181 68.7842 16.7477 68.4374 16.4141C68.0933 16.0805 67.5704 15.9137 66.866 15.9137H64.8638V19.7365H66.866C67.5677 19.7365 68.0933 19.5697 68.4374 19.2361Z" fill="white"/>
                            <path d="M83.2843 25.4651H77.6462L76.7413 28.1585H72.8887L78.3534 12.9141H82.6151L88.0798 28.1585H84.1838L83.2789 25.4651H83.2843ZM82.3388 22.5994L80.4666 17.0184L78.6162 22.5994H82.3388Z" fill="white"/>
                            <path d="M99.0363 17.7352C98.7626 17.2294 98.3725 16.8411 97.8631 16.5731C97.3538 16.3051 96.755 16.1712 96.0669 16.1712C94.8775 16.1712 93.9211 16.5649 93.2058 17.3552C92.4879 18.1454 92.1302 19.1982 92.1302 20.5162C92.1302 21.9217 92.5068 23.0182 93.26 23.8057C94.0132 24.5959 95.0482 24.9897 96.3703 24.9897C97.2752 24.9897 98.0392 24.7573 98.6624 24.2951C99.2855 23.833 99.7407 23.1658 100.028 22.2963H95.3597V19.5591H103.363V23.0127C103.089 23.9397 102.629 24.801 101.976 25.5967C101.323 26.3924 100.494 27.0378 99.4914 27.53C98.4863 28.0222 97.3538 28.2683 96.0913 28.2683C94.5984 28.2683 93.2681 27.9401 92.1004 27.2811C90.93 26.6221 90.0197 25.7061 89.3667 24.533C88.7138 23.36 88.3887 22.0201 88.3887 20.5162C88.3887 19.0122 88.7138 17.6669 89.3667 16.4884C90.0197 15.3098 90.9273 14.3883 92.0896 13.7293C93.2519 13.0703 94.5795 12.7422 96.0696 12.7422C97.8767 12.7422 99.402 13.1852 100.643 14.0656C101.884 14.9489 102.705 16.1712 103.106 17.7352H99.039H99.0363Z" fill="white"/>
                            <path d="M117.755 12.9141V28.1585H114.076V21.883H108.351V28.1585H104.672V12.9141H108.351V18.8861H114.076V12.9141H117.755Z" fill="white"/>
                            <path d="M123.349 15.8891V18.9736H128.277V21.8392H123.349V25.1834H128.922V28.1585H119.67V12.9141H128.922V15.8891H123.349Z" fill="white"/>
                            <path d="M141.445 12.9141V15.8891H137.444V28.1585H133.764V15.8891H129.763V12.9141H141.445Z" fill="white"/>
                            <path d="M153.429 12.9141V15.8891H149.427V28.1585H145.748V15.8891H141.746V12.9141H153.429Z" fill="white"/>
                            <path d="M158.227 12.9141V28.1585H154.548V12.9141H158.227Z" fill="white"/>
                            <path d="M171.074 20.2451C170.673 20.9752 170.056 21.5658 169.224 22.0142C168.392 22.4627 167.36 22.6869 166.125 22.6869H163.843V28.1585H160.164V12.9141H166.125C167.33 12.9141 168.349 13.1246 169.181 13.543C170.012 13.9641 170.636 14.541 171.053 15.2793C171.467 16.0176 171.676 16.8653 171.676 17.8196C171.676 18.7028 171.475 19.5095 171.074 20.2396V20.2451ZM167.417 19.2361C167.761 18.9025 167.934 18.4321 167.934 17.8251C167.934 17.2181 167.761 16.7477 167.417 16.4141C167.073 16.0805 166.55 15.9137 165.846 15.9137H163.843V19.7365H165.846C166.547 19.7365 167.073 19.5697 167.417 19.2361ZM176.474 12.9168V22.0388C176.474 22.9521 176.696 23.6522 177.141 24.1444C177.585 24.6366 178.238 24.8827 179.099 24.8827C179.961 24.8827 180.619 24.6366 181.08 24.1444C181.538 23.6522 181.768 22.9494 181.768 22.0388V12.9141H185.447V22.0142C185.447 23.376 185.16 24.5272 184.586 25.4678C184.011 26.4085 183.242 27.1194 182.272 27.5952C181.305 28.0737 180.224 28.3116 179.034 28.3116C177.845 28.3116 176.778 28.0765 175.84 27.6061C174.9 27.1358 174.158 26.4276 173.613 25.4788C173.069 24.5299 172.795 23.376 172.795 22.0142V12.9141H176.474V12.9168ZM200.809 28.1612H197.13L190.977 18.7575V28.1612H187.298V12.9141H190.977L197.13 22.3615V12.9141H200.809V28.1585V28.1612ZM211.503 28.1612L206.426 21.4291V28.1612H202.746V12.9141H206.426V19.6025L211.459 12.9141H215.784L209.931 20.3845L216 28.1585H211.503V28.1612Z" fill="#574AFF"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1540_11765">
                            <rect width="216" height="41" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
