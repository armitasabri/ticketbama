<!DOCTYPE html>

<html lang="en">
<head>
<title>Laravel DataTable - Tuts Make</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>Laravel DataTable - Tuts Make</h2>
            <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                    <th>id</th>
                    <th>comment</th>
                    <th>users_id</th>
                    <th>events_id</th>
                    <th>fullname</th>
                    <th>cstatuses_id</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                  </tr>
               </thead>
            </table>
         </div>
 
<script>
    console.log('hiiii');
  $(document).ready( function () {
     $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            
            ajax:"{{ Route('admin_comments.datatable') }}",
            columns: [
                     { data: 'id', name: 'id' },
                     { data: 'comment', name: 'comment' },
                     { data: 'users_id', name: 'users_id' },
                     { data: 'events_id', name: 'events_id' },
                     { data: 'fullname', name: 'fullname' },
                     { data: 'cstatuses_id', name: 'cstatuses_id' },
                     { data: 'created_at', name: 'created_at' },
                     { data: 'updated_at', name: 'updated_at' }
 
                  ]
         });
      });
 </script>
   </body>
</html>

