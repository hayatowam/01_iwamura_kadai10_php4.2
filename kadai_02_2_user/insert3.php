<?php
// 1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["name"];
$lid= $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

// var_dump($name);


// 2. DB接続します
// いちいち入力を使ったやりかた--------------------
    // try {
    //   //Password:MAMP='root',XAMPP=''
    //   $pdo = new PDO('mysql:dbname=gs_user_table;charset=utf8;host=localhost','root','root');
    // } catch (PDOException $e) {
    //   exit('DBConnectError:'.$e->getMessage());
    // }

  // 関数を使ったやりかた--------------------
  require_once('funcs3.php'); //funcsファイルを呼び出す
  $pdo = db_conn(); //関数を呼び出す

// ３．SQL文を用意(データ登録：INSERT)
// 一度仮の挿入位置を渡してあげるイメージ。実際の値は、４で指定し入力する
$stmt = $pdo->prepare(
  "INSERT INTO gs_user_table( id, name, lid, lpw, kanri_flg, life_flg)
  VALUES( NULL, :name, :lid, :lpw, :kanri_flg, :life_flg )"
);
// 4. バインド変数を用意→クッションを挟むことで、文字列化してあげることが可能
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

// 5. 実行→データの登録
$status = $stmt->execute();

// 6．データ登録処理後→エラーがなければ終了
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}else{
  //５．index2.phpへリダイレクト
  header('Location: index3.php');//ヘッダーロケーション（リダイレクト）
}
?>


<!-- // gittest -->