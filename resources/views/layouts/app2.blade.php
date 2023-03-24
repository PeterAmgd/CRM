<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('./dist/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./dist/all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    <!-- Script -->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <!-- Scripts -->
    @routes

    <title>CMS</title>
</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-gray-lightest">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            {{-- <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">CRM</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">
                        @guest

                        @if (Auth::user())
                        {{ ( Auth::user()->name) }}
                        @else {{ 'nofoud' }}
                        @endif
                        @endguest

                    </a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-gray-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header> --}}
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/loginuser') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <a id="" class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>



                                <div class="dropdown-item" aria-labelledby="navbarDropdown">
                                    <a class="btn btn-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!--/Header-->


            <div class="flex flex-1">
                <!--Sidebar-->
                <aside id="sidebar"
                    class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                    <div class="flex">

                    </div>
                    <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-300-border ">
                            <a href="{{ url('/') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-home float-left mx-2 fa-lg"></i>
                                Dashboard
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="{{ route('ServiceUser.index') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fa fa-users float-left mx-2 fa-lg"></i>
                                Service User
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="{{ route('Users') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fa fa-user float-left mx-2 fa-lg"></i>
                                System Users
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="{{ url('/departments') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                {{-- <i class="fas fa-table float-left mx-2"></i> --}}
                                <i class="fa fa-solid fa-code-fork float-left mx-2 fa-lg"></i>

                                Departments
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href=""
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fa fa-calendar float-left mx-2 fa-lg"></i>
                                Reminders
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="{{ url('/modals') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2 "></i>
                                updates
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>


                    </ul>

                </aside>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-medium flex-1 p-3 overflow-hidden">
                    @yield('content2')
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="bg-gray-darkest text-white p-2">
                <div class="flex flex-1 mx-auto">&copy; My Design</div>
            </footer>
            <!--/footer-->

        </div>

    </div>

    <script src="/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>













    {{-- myJS --}}
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#userstable').DataTable();
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                $('#name').val(data[1]);
                $('#email').val(data[2]);
                // $('#department_id').val(data[3]);
                // $('#role_id').val(data[4]);


                $('#editform').attr('action', '/update/' + data[0]);
                $('#editmodal').modal('show');


            })
        })

        $(document).ready(function() {
            var table = $('#userstable').DataTable();
            table.on('click', '.delete', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                $('#name').val(data[1]);
                $('#email').val(data[2]);
                // $('#department_id').val(data[3]);
                // $('#role_id').val(data[4]);


                $('#deleteform').attr('action', '/removeUser/' + data[0]);
                $('#deletemodal').modal('show');


            })
        })

        $(document).ready(function() {
            var table = $('#depstable').DataTable();
            // table.column( 1 ).visible( false );

            table.on('click', '.editdepartment', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                $('#department_name').val(data[1]);

                // $('#department_id').val(data[3]);
                // $('#role_id').val(data[4]);

                $('#departmenteditform').attr('action', '/departments/' + data[0]);
                $('#departmenteditmodal').modal('show');


            })
            table.on('click', '.deletedep', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                $('#name').val(data[1]);
                $('#email').val(data[2]);
                // $('#department_id').val(data[3]);
                // $('#role_id').val(data[4]);

                $('#depdeleteform').attr('action', '/departments/' + data[0]);
                $('#depdeletemodal').modal('show');


            })
            table.on('click', '.userdep', function() {

                // var userdata = table
                // .rows()
                // .data();
                // for (let index = 0; index < table.rows().count(); index++) {

                //     alert(userdata[index][1]);

                // }

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                // $('#User_depart').addClass('hidden');
                // $('#email').val(data[2]);
                // $('#department_id').val(data[3]);
                // $('#role_id').val(data[4]);
                // $('#User_depart').val(data[1]);

                let url = "{{ route('departments.show', ':id') }}";
                url = url.replace(':id', data[0]);
                document.location.href = url;

                $('#userdepmodal').modal('show');


                // $('#userdepform').attr('action', {{ route('departments.show', ':id') }});


            })

        })


        $(document).ready(function() {
            var depuserstable = $('#depuserstable').DataTable();
            // var depstable = $('#depstable').DataTable();
            // var userstable = $('#userstable').DataTable();
            depuserstable.on('click', '.removeUserDep', function() {
                // let url1 = "{{ route('departments.index') }}";
                // document.location.href = url1;

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = depuserstable.row($tr).data();

                // alert(data[0])

                // let urls = "{{ route('removeUserDep', ':id') }}";
                // urls = urls.replace(':id', data[0]);
                // document.location.href = urls;

                // $('#depdeletemodal').modal('show');

                // $('#removeuserdep').attr('action', '/removeUserDepart/' + data[0]);


            })

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }
            // $('#userdepmodal').modal('show');

            // var userdata = depuserstable
            //     .rows()
            //     .data();
            // if (userdata[0][0] != null || userdata[0][0] != '') {
                $('#userdepmodal').modal('show');

            // }
            // alert(daata[0][0]);
            // var depsdata = table
            //     .rows(0)
            //     .data();
            // alert(daata[0][0]);
            // var depusers = table
            //     .rows(0)
            //     .data();
            // alert(daata[0][0]);
            // var table2 = $('#depstable').DataTable();


            // $tr = $(this).closest('tr');
            // if ($($tr).hasClass('child')) {
            //     $tr = $tr.prev('.parent');
            // }
            // var depuserdata = depuserstable.row($tr).data();
            // $('#User_depart').val(data[1]);
            // // var data2 = table2.row($tr).data();
            // $('#depart_ID').val(data[1]);

            // $('#email').val(data[2]);
            // $('#department_id').val(data[3]);
            // $('#role_id').val(data[4]);


            // $('#userdepmodal').modal('show');




        })


        $(document).ready(function() {

            var depuserstable = $('#addusersdeptable').DataTable();

            var depstable = $('#depstable').DataTable();
            // var userstable = $('#userstable').DataTable();
            let dep_id;
            depstable.on('click', '.adduserdep', function() {

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var depsdata = depstable
                    .row($tr)
                    .data();
                // alert(depsdata[0])
                $('#adduserdepmodal').modal('show');

                dep_id = depsdata[0];
            })



            depuserstable.on('click', '.addinguserdep', function() {
                // alert(hello);

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }


                var data = depuserstable.row($tr).data();
                $('#Add_user_depart').val(data[1]);


                let url = "{{ route('AssignDep', [':id', ':dep_ID']) }}";
                url = url.replace(':id', data[0]);
                url = url.replace(':dep_ID', dep_id);

                document.location.href = url;

                //    $('#adduserdepform').attr('action', '/assigndep/' + data[0] + '/' + depsdata[0]);
                // $('#adduserdepmodal').modal('show');


            })
            // $('#userdepmodal').modal('show');



        })
    </script>

</body>

</html>
