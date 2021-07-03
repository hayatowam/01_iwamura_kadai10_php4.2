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
    <div class="navbar-header"><a class="navbar-brand" href="select3.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<form method="POST" action="insert3.php">
<!-- // <form method="どんな方法で" action="どこに"> -->
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録画面</legend>
     <label>名前：<input type="text" name="name"></label><br>
    <label>ログインID：<input name="lid" ></label><br>
    <label>ログインパスワード：<input name="lpw"></label><br>
     <label>管理者フラグ：
      <select id="list" name="kanri_flg">
        <option hidden>一つを選択して下さい</option>
        <option value="0">0:管理者</option>
        <option value="1">1:スーパー管理者</option>
      </select> <br>
     <label>ステータス：
      <select id="list" name="life_flg">
        <option hidden>一つを選択して下さい</option>
        <option value="0">0:退社</option>
        <option value="1">1:入社</option>
      </select> 
    </label><br>
    <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
