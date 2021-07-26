<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todolist</title>
</head>

<body>
  <h1>Todo List</h1>
  <div>
    <form acction="/" method="POST">
      @csrf
      @if ($errors->any())
      <ul>
      @foreach ($error->all() as $error)
      <li style="color:red">{{$error}}</li>
      @endforeach
      </ul>
      @endif
      <input type="text",name="body"class="form-control" placeholder="todolist" style="/">
      <button type="submit"class="btn btn-primary">追加する</button>
      </form>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <tbody>
      @foreach($todos as $todo)
      <tr>
        <td>{{$todos->task_date}}</td>
        <td>{{$todo->task_name}}</td>
        <td><form action="{{action('TodolistFormController',$todo)}}" method="post">
        {{csrf_field()}}
        {{method_field('get')}}
        <button type="submit" class="btn btn-primary">更新</button>>
       </td>
        </form>
        <td><form action="{{url('/todos',$todo->id)}}"method="post">
        {{csrf_field()}}
        {{method_field('delete')}}
        <button type="submit"class="btn btn-danger">削除</button>
        </td>
        </form>
      </tr>
      @endforeach
    </table>
  </div>
</body>

</html>