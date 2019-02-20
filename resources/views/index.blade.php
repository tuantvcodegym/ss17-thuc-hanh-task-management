<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Task List
        </div>
        @if(!isset($tasks))
            <h5 class="text-primary">Du lieu khong ton tai</h5>
        @else()
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Created</th>
                        <th scope="col">Due Date</th>
                    </tr>
                </thead>
                <tbody>
                {{-- ham cout() dung de dem so luong du lieu neu bang 0 thi tra ve --}}
                @if(count($tasks)==0)
                    <tr>
                        <td colspan="5"><h5 class="text-primary">Hien tai chua co task nao duoc tao</h5></td>
                    </tr>
                @else
                @foreach($tasks as $key=>$task)
                    <tr>
                        <td scope="row">{{++$key}}</td>
                        <td>{{$task->Tasktitle}}</td>
                        <td>{{$task->Content}}</td>
                        <td>{{$task->create_at}}</td>
                        <td>{{$task->update_at}}</td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        @endif
    </div>
</div>
</body>
</html>