import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

// <script type="text/javascript">
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
// </script>