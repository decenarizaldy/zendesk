<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zendesk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- Styles -->
        
    </head>
    <body>
       <div class="container">
  <h2>Zendesk Users</h2>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Role</th>
        <th>Active</th>
        <th>Time_zone</th>
        <th>created_at</th>
        <th>last_login_at</th>

      </tr>
    </thead>
    <tbody>
        @foreach($list as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->role}}</td>
        <td>@if($user->active == 1)<span style="color:green;">Active</span>@else<span style="color:red;">Inactive</span> @endif</td>
        <td>{{$user->time_zone}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->last_login_at}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
