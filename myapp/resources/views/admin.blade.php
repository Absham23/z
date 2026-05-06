<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">    
  <h2>Admin List</h2>
  <a href="{{ route('admin.create') }}" class="btn btn-primary" style="margin-bottom: 20px;">Add Admin</a>
  @if(session('alert'))
  <div  class="alert alert-success" style="margin-bottom: 20px;">{{session('alert')}}</div>
  @endif 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($admin as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td><a href="{{ route('admin.edit' , $item->id)}}" class="btn btn-success">Edit</a></td>
        <td><form action="{{ route('admin.destroy' , $item->id) }}" method="POST">
          @csrf
          @method('Delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>