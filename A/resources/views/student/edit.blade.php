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
  <h2>編輯學生資料</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>姓名</th>
        <th>國文</th>
        <th>英文</th>
        <th>數學</th>
      </tr>
    </thead>
<form action="{{route('students.update')}}" method="post">
  @csrf
  <tbody>
    <tr>
      <td><input type="text" name="name" id="name"></td>
      <td><input type="number" name="chinese" id="chinese"></td>
      <td><input type="number" name="english" id="english"></td>
      <td><input type="number" name="math" id="math"></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" value="確認新增" class="btn btn-success"></td>
    </tr>
  </tbody>
</form>
  </table>
</div>

</body>
</html>