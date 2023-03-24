@extends('layouts.app2')

@section('content2')
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-400 px-2 py-3 border-solid border-gray-400 border-b text-xl-center font-weight-bold">
                Department Management
            </div>
            <div class="p-3">
                <table id="depstable" class="table-responsive w-full rounded ">
                    <thead>
                        <tr class="bg-gray-400 ">
                            <th class="border w-1/9 px-4 py-2 text-center">ID</th>
                            <th class="border w-1/2 px-4 py-2 text-center ">Department Name</th>
                            {{-- <th class="border w-1/6 px-4 py-2 text-center">Show Users</th> --}}

                            {{-- <th class="border w-1/7 px-4 py-2">Status</th> --}}
                            <th class="border w-1/5 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('departments.index') }}" method="get">
                            @method('get')
                            @foreach ($departments as $department)
                                <tr>
                                    <td class="border px-4 py-2 text-center ">{{ $department->id }}</td>
                                    <td class="border px-4 py-2 text-center ">{{ $department->department_name }}</td>


                                    <td class="border px-4 py-2 text-center">
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white userdep">
                                            <i class="fas fa-eye"></i></a>
                                        <a href="#"
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white editdepartment ">
                                            <i class="fas fa-edit "></i></a>



                                        <a href="#"
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white adduserdep">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href="#"
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500 deletedep">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </form>



                    </tbody>
                </table>




            </div>

        </div>
        <!-- add departs -->
        <div class=" flex flex-col">
            <div class="flex flex-col md:flex-row lg:flex-row mx-2">

                <div class="mb-2 border-solid bg-gray-400 border-gray-800 rounded border shadow-sm w-full ">
                    <form method="POST" action="{{ route('departments.store') }}">
                        @method('post')
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                            @csrf
                            <button class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full"
                                type="submit">
                                Add Department
                            </button>
                        </div>
                        <div class="p-3">
                            <div class="mt-2">
                                <label class="block text-sm font-bold" for="add_dep">{{ __('Department Name') }}</label>
                                <input class="w-full px-5 py-1 font-bold bg-blac rounded" id="add_dep" type="text"
                                    class="form-control @error('add_dep') is-invalid @enderror" name="add_dep" required
                                    autocomplete="add_dep" autofocus placeholder="Department Name">
                                @error('add_dep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- /add departs -->

    </div>



    {{-- start update modal --}}
    <div class="modal" id="departmenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Departments</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="p-3" class="mb-2 border-solid bg-gray-400 border-gray-800 rounded">
                    <div class="modal-body">
                        <form method="POST" action="/departments" id="departmenteditform">
                            @method('PUT')
                            @csrf
                            <div class="mt-2">
                                <label
                                    class="bg-gray-200 px-2 py-2 border-solid border-gray-300 border-b block text-sm font-bold"
                                    for="department_name">{{ __('Name') }}</label>
                                @isset($department)
                                    <input class="bg-gray-400  w-full px-5 py-1 font-bold bg-blac rounded" id="department_name"
                                        type="text" class="form-control @error('department_name') is-invalid @enderror"
                                        name="department_name" value="{{ $department->department_name }}" required
                                        autocomplete="department_name" autofocus placeholder="department_name">
                                    @error('department_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endisset

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary col-3 ml-auto"
                                    data-dismiss="modal">Close</button>
                                <button class="btn btn-primary col-5 mr-auto" type="submit">
                                    Update department
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end update modal --}}

    {{-- start delete modal --}}
    <div class="modal" id="depdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you Sure , you want to delete this Department ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="" class="mb-2 border-solid bg-gray-400 border-gray-800 rounded">
                    <div class="">
                        <form method="POST" action="/departments" id="depdeleteform">
                            @csrf
                            @method('delete')
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary col-3 ml-auto"
                                    data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-danger col-3 mr-auto">Delete</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end delete modal --}}

    {{-- start show users modal --}}
    <div class="modal" id="userdepmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Department users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="" class="mb-2 border-solid bg-gray-400 border-gray-800 rounded">
                    <div class="">



                        <div class="modal-footer">

                            <table id="depuserstable" class="table-responsive w-full rounded  ">
                                <thead>
                                    <tr class="bg-gray-400 ">

                                        <th class="border w-1/6 px-4 py-2 text-center">ID</th>
                                        <th class="border w-1/6 px-4 py-2 text-center">Show Users</th>



                                        {{-- <th class="border w-1/7 px-4 py-2">Status</th> --}}
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <form method="GET" id="userdepform">
                                        @csrf
                                        @method('get')
                                        @isset($usersofdeps)
                                            @foreach ($usersofdeps as $usersofdep)
                                                <tr>
                                                    <td class="border px-4 py-2 text-center " id="" name="">
                                                        {{ $usersofdep->id }}
                                                    </td>
                                                    <td class="border px-4 py-2 text-center " id="User_depart"
                                                        name="User_depart">{{ $usersofdep->name }}
                                                    </td>

                                                    <form method="get" action="{{ route('removeUserDep',$usersofdep->id) }}" id="removeuserdep">
                                                        @csrf
                                                        @method('get')
                                                        <td class="border px-4 py-2 text-center">

                                                            <a
                                                                class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white removeUserDep ">
                                                                <button type="submit" class="fas fa-trash "></button>
                                                            </a>

                                                        </td>
                                                    </form>

                                                </tr>
                                            @endforeach
                                        @endisset

                                    </form>



                                </tbody>
                            </table>



                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end show users modal --}}

    {{-- start add users to depart modal --}}
    <div class="modal" id="adduserdepmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Department users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="" class="mb-2 border-solid bg-gray-400 border-gray-800 rounded">
                    <div class="">
                        <div class="modal-footer">
                            <table id="addusersdeptable" class="table-responsive w-full rounded  ">
                                <thead>
                                    <tr class="bg-gray-400 ">
                                        <th class="border w-1/6 px-4 py-2 text-center">Show Users</th>
                                        <th class="border w-1/6 px-4 py-2 text-center">ID</th>
                                        <th class="border w-1/6 px-4 py-2 text-center">actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <form action="/assigndep" method="post" id="adduserdepform">
                                        @csrf
                                        @method('post')
                                        @isset($users)
                                            @foreach ($users as $user)
                                                @if ($user->department_id == null)
                                                    <tr>
                                                        <td class="border px-4  text-center">
                                                            {{ $user->id }}

                                                        </td>
                                                        <td class="border px-4  text-center">
                                                            {{ $user->name }}

                                                        </td>
                                                        <td class="border px-4  text-center ">
                                                            <a
                                                                class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white addinguserdep ">
                                                                <button type="submit" class="fas fa-plus "></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endisset
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end add users to depart modal --}}

@endsection
