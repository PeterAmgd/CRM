import styles from './src/styles.css'
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