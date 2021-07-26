<h1>Todo list</h1>
<div>
<h2>削除</h2>
<form method="POST" action="/delete/{{$todo->id}}">
@csrf 
<P>
作成日：{{$todo->task_date}}
</P>
<p>
タスクの名前：{{$todo->task_name}}
</p>
<input type="submit" name="delete" value="削除">

</form>
</div>