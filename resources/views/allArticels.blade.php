<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Articels</title>
</head>

<body>

    <div>
        <table>
            <tbody>
                <tr>
                    <th>عنوان مقاله</th>
                    <th>متن</th>
                    <th>نویسنده</th>
                </tr>

                @foreach ($articels as $articel)
                    <tr>
                        <th>{{ $articel->title }}</th>
                        <th><a href="{{route('singelArticle',$articel->id)}}">{!!substr( $articel->desceription, 0, 20) !!}</a></th>
                        <th>{{ $articel->user_id }}</th>
                    </tr>
                @endforeach

            </tbody>
        </table>


    </div>

    <a href="{{route('index')}}">
        <p>
            بازگشت به صفحه اول
        </p>
    </a>
</body>

</html>
