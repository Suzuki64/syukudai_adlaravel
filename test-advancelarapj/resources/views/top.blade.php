<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/create" method="post">
    @csrf
    <p>氏名</p>
    <input name="name" type="text">
    <p>メールアドレス</p>
    <input name="email" type="email"><br>
    <button type="submit">送信する</button>
  </form>
</body>
</html>