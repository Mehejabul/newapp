 @if(Session::has('success'))
    <script>
        swal({
            title: 'success!',
            text: "{{ Session::get('success')}}",
            icon = 'success',
            timer: 5000
        });
    </script>
 @endif

 @if(Session::has('error'))
 <script>
     swal({
         title: 'error!'
         text: "{{ Session::get('error')}}",
         icon = 'error',
         timer: 5000
        });
    </script>
 @endif
