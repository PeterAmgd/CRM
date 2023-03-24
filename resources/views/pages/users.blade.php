@extends('layouts.app2')

@section('content2')
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-400 px-2 py-3 border-solid border-gray-400 border-b">
                User Management
            </div>
            <div class="p-3">
                <table id="userstable" class="table-responsive w-full rounded ">
                    <thead>
                        <tr class="bg-gray-400 ">
                            <th class="border w-1/9 px-4 py-2">ID</th>
                            <th class="border w-1/4 px-4 py-2">User Name</th>
                            <th class="border w-1/6 px-4 py-2">Email</th>
                            <th class="border w-1/6 px-4 py-2">Role</th>
                            <th class="border w-1/6 px-4 py-2">Department</th>
                            {{-- <th class="border w-1/7 px-4 py-2">Status</th> --}}
                            <th class="border w-1/5 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('Users') }}" method="post">

                            @foreach ($users as $user)
                                <tr>
                                    <td class="border px-4 py-2">{{ $user->id }}</td>
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->role->role_name ?? '' }}</td>

                                    <td class="border px-4 py-2">
                                        {{ $user->department->department_name ?? '' }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-eye"></i></a>
                                        <a href="#"
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white edit ">
                                            <i class="fas fa-edit "></i></a>

                                        {{-- <i class="fas fa-edit" data-toggle="modal"
                                            data-target="#deletemodal"></i></a> --}}

                                        <a href="#"
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500 delete" >
                                            <i class="fas fa-trash"  ></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </form>



                    </tbody>
                </table>




            </div>

        </div>

    </div>


    <div class=" flex flex-col">
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">

            <div class="mb-2 border-solid bg-gray-400 border-gray-800 rounded border shadow-sm w-full md:w-1/4 lg:w-1/4">
                <form method="POST" action="{{ route('addUsers') }}">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                        @csrf
                        <button class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full"
                            type="submit">
                            Add User
                        </button>
                    </div>
                    <div class="p-3">


                        <div class="mt-2">
                            <label class="block text-sm font-bold" for="addname">{{ __('Name') }}</label>
                            <input class="w-full px-5 py-1 font-bold bg-blac rounded" id="addname" type="text"
                                class="form-control @error('addname') is-invalid @enderror" name="addname"
                                value="{{ old('name') }}" required autocomplete="addname" autofocus placeholder="Name">
                            @error('addname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm " for="addemail">{{ __('Email Address') }}</label>
                            <input class="w-full px-5 py-1 font-bold bg-blac rounded" id="addemail" type="addemail"
                                class="form-control @error('addemail') is-invalid @enderror" name="addemail"
                                value="{{ old('email') }}" required autocomplete="addemail" placeholder="Email">
                            @error('addemail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class=" block text-sm " for="password">{{ __('Password') }}</label>
                            <input class="w-full px-5 py-1 font-bold bg-blac rounded" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class=" block text-sm " for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input class="w-full px-5 py-1 font-bold bg-blac rounded " id="password-confirm" type="password"
                                class="form-control " name="password_confirmation" required autocomplete="new-password"
                                placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class=" block text-sm " for="adddepartment_id">Department</label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="adddepartment_id" name="adddepartment_id" required autocomplete="department">

                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                    @endforeach
                                </select>

                                @error('adddepartment_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label class=" block text-sm " for="addrole_id">Role</label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="addrole_id" name="addrole_id" required autocomplete="role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('addrole_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </form>
            </div>

        </div>
        <!--/Outline Buttons -->

        <!--Solid Buttons-->

        <!--/Solid Buttons-->
    </div>
    <!-- /Cards Section Ends Here -->

    {{-- start update modal --}}
    <div class="modal" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="p-3" class="mb-2 border-solid bg-gray-400 border-gray-800 rounded">
                    <div class="modal-body">
                        <form method="POST" action="/update" id="editform">
                            @method('PUT')
                            @csrf
                            <div class="mt-2">
                                <label class="block text-sm font-bold" for="name">{{ __('Name') }}</label>
                                <input class="w-full px-5 py-1 font-bold bg-blac rounded" id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $user->name }}" required autocomplete="name" autofocus
                                    placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label class="block text-sm " for="email">{{ __('Email Address') }}</label>
                                <input class="w-full px-5 py-1 font-bold bg-blac rounded" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label class=" block text-sm " for="department_id">Department</label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="department_id" name="department_id">
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}
                                            </option>
                                        @endforeach


                                    </select>

                                    @error('department_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label class=" block text-sm " for="role_id">Role</label>
                                    <div class="relative">
                                        <select
                                            class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="role_id" name="role_id">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                            @endforeach
                                        </select>

                                        @error('role_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">
                                Update User
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end update modal --}}

    {{-- start delete modal --}}
    <div class="modal" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you Sure , you want to delete this user ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="" class="mb-2 border-solid bg-gray-400 border-gray-800 rounded">
                    <div class="">
                        <form method="POST" action="/removeUser" id="deleteform">
                            @method('delete')
                            @csrf
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary col-3 ml-auto" data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-danger col-3 mr-auto">Delete</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end delete modal --}}
@endsection
