<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewArticel</title>
</head>
<body>
    
    <div>
        <form method="POST" action="{{route('createArticel')}}">
@csrf
            <div class="col-md-4">
                <div class="form-group">
                    <label>عنوان مقاله </label>
                    <input class="form-control" type="text" name="title">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>  متن  </label>
                    <input class="form-control" type="text" name="desceription">
                </div>
            </div>

            <button type="submit" class="btn btn-default btn-icons"><i
                class="fa fa-trash">ذخیره</i></button>

        </form>
    </div>
</body>
</html>