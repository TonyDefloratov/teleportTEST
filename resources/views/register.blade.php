<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>

    {{--    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
    {{--    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    {{--    <script src = "https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>--}}

    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>



</head>
<body class="bg-info">
<div class="container w-25 mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>Введите свои данные для регистрации</h3>

            @if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{ $errors }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user-form') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Введите имя</label>
                    <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Введите почту</label>
                    <input type="text" name="email" placeholder="Введите почту" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Введите пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <br>
{{--                    @method('submit')--}}
                    <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas">Отправить</i> </button>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
