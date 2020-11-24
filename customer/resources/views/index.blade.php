<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Nhập thông tin</h2>
<form action="{{route('check')}}" method="post">
    @csrf
Họ và tên:<input type="text" name="name">
    <br>
    <br>
Tuổi: <input type="text" name="age">
    <br>
    <input type="submit" value="Kiểm tra">
</form>
<div class="error-message">
    @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
</div>
</body>
</html>
