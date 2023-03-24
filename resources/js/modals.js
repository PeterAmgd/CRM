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
    table.on('click', '.editdepartment', function() {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();
        $('#department_name').val(data[1]);

        // $('#department_id').val(data[3]);
        // $('#role_id').val(data[4]);


        $('#departmenteditform').attr('action', '/updateDep/' + data[0]);
        $('#departmenteditmodal').modal('show');


    })
})

$(document).ready(function() {
    var table = $('#depstable').DataTable();
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


        $('#depdeleteform').attr('action', '/removeDepart/' + data[0]);
        $('#depdeletemodal').modal('show');


    })
})

$(document).ready(function() {
    var table = $('#depstable').DataTable();
    table.on('click', '.userdep', function() {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();
        $('#department_name').val(data[1]);
        // $('#email').val(data[2]);
        // $('#department_id').val(data[3]);
        // $('#role_id').val(data[4]);


        $('#userdepform').attr('action', '/userDepart/' + data[0]);
        $('#userdepmodal').modal('show');


    })
})

// $(document).ready(function() {
//     var table = $('#depuserstable').DataTable();
//     var table2 = $('#depstable').DataTable();


//         $tr = $(this).closest('tr');
//         if ($($tr).hasClass('child')) {
//             $tr = $tr.prev('.parent');
//         }
//         var data = table.row($tr).data();
//         $('#User_depart').val(data[1]);
//         // $('#email').val(data[2]);
//         // $('#department_id').val(data[3]);
//         // $('#role_id').val(data[4]);


//         // $('#userdepform').attr('action', '/userDepart/' + data[0]);
//         // $('#userdepmodal').modal('show');



// })