<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    {{--    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
    {{--    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    {{--    <script src = "https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>


</head>
<body class="bg-info">
<div class="container w-25 mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>To-Do List</h3>
            <form action="{{ route('store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="input-group">
                    <input type="text" name="content" class="form-control" placeholder="Create a new todo...">
                    <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i> </button>
                </div>
            </form>
            @if(count($todo_lists))
                <ul class="list-group list-group-flush mt-3">
                    @foreach($todo_lists as $todo_lists)
                        <li class="list-group-item">
                            <form action="{{ route('destroy', $todo_lists->id) }}" method="POST">
                                {{ $todo_lists->content }}
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i> </button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-center mt-3">No Tasks!</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>
