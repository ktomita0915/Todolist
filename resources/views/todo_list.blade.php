<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todolist</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3">
    <h1>Todo List</h1>
  </div>
  <div class="container mt-3">
    <div class="container mb-4">
      {!!Form::open(['route'=>'todos.store','method'=>post])!!}
      {{csrf_field()}}
      <div class="row">
        {{Form::text('newTodo',null,['class'=>'form-control col-8 mr-5'])}
        {{Form::submit('追加',['class'=>'btn btn-primary'])}}
      </div>
      {!!Form::close()!!}
      </div>
      @if($error->has('newTodo'))
      <p class="alert alert-danger">{{$error->first('newTodo')}}</p>
      @endif
      <table class="table">
        <thead>
          <tr>
            <th scope="col">作成日</th>
            <th scope="col" style="width=60%">タスク名</th>
            <th scope="col">更新</th>
            <th scope="col">削除</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2021-07-26 06:42:23</td>
            <th scope="row">タスク名</th>
            <td><a href="" class-"btn btn primary">更新</a></td>
            <td>{{Form::submit('削除',['class'=>'btn btn-danger'])}}</td>
          </tr>
          <tr>
            <td>2021-07-26 06:42:23</td>
            <th scope="col" style="width=60%">タスク名</th>
            <td><a href=""class="btn btn primary">更新</th>
            <td>{{Form::submit('削除',['class'=>'btn btn danger'])}}</td>
          </tr>
          @endforeach
        </tbody>
        </table>
        </div>
        </body>
</html>
