<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>  
  <a href="{{route('students.create')}}" class="btn btn-success">新增</a>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>姓名</th>
        <th>國文</th>
        <th>英文</th>
        <th>數學</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $student)
      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->chinese}}</td>
        <td>{{$student->english}}</td>
        <td>{{$student->math}}</td>
<<<<<<< HEAD
        <td>
        <a href="{{route('students.edit',['student'=>$student->id]);}}" class="btn btn-warning">編輯</a>  
        <a href="{{route('students.create')}}" class="btn btn-danger">刪除</a>  
        </td>
=======
>>>>>>> 1c935e6ed3551cf4a9d73beae2962496f3cb89fd
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>