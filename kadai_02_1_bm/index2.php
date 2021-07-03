<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select2.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<form method="POST" action="insert2.php">
<!-- // <form method="どんな方法で" action="どこに"> -->
  <div class="jumbotron">
   <fieldset>
    <legend>本のブックマーク</legend>
     <label>本のタイトル：<input type="text" name="name"></label><br>
    <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <label>評価：
      <select id="list" name="rate">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select> 
    </label><br>
     <label>お気に入りページ：<input name="favoritepage"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
