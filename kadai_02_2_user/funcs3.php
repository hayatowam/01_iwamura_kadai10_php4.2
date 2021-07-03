<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数：db_conn() 
//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。
function db_conn(){
    
    // insert.phpから持ってきた関数
    try {
        // ------------------
        // ローカル用
        // ------------------
            $db_name = "gs_db";    //データベース名
            $db_id   = "root";      //アカウント名
            $db_pw   = "root";      //パスワード：XAMPPはパスワード無しに修正してください。
            $db_host = "localhost"; //DBホスト

        
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo; //1行追記
      } catch (PDOException $e) {
      exit('DBConnectError:'.$e->getMessage());
      }
}

//SQLエラー関数：sql_error($stmt)
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:" . print_r($error, true));
}

//リダイレクト関数: redirect($file_name)
function redirect($file_name){
    header("Location: " . $file_name ); //ファイル名が挿入される。その後Index.phpにおいて、リダイレクトされる
    exit();
}
// 引数を関数として使うことができる



// // -------------------
// // 鈴木さん
// <?php
// //XSS対応（ echoする場所で使用！）
// function h($str)
// {
//     return htmlspecialchars($str, ENT_QUOTES);
// }
// ​
// //DB接続関数：db_conn() 
// //※関数を作成し、内容をreturnさせる。
// //※ DBname等、今回の授業に合わせる。
// function db_conn(){
//     try {
//         //localhost用  
//           $db_name = "tk_db";
//           $db_id = "root";
//           $db_pw = "root";
//           $db_host = "localhost";
//           $db_table = "tk_an_table";
      
//           //sakura server用（gitにアップするときは削除する！）
//           // $db_name = "limealpaca16_test";
//           // $db_id = "limealpaca16";
//           // $db_pw = "milsakura1229";
//           // $db_host = "mysql57.limealpaca16.sakura.ne.jp";
//           // $db_table = "tk_table_1";
      
//         //Password:MAMP='root',XAMPP=''
//         $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host,$db_id,$db_pw);
//         return $pdo;
//     } catch (PDOException $e) {
//         exit('DBConnectError:'.$e->getMessage());
//       }
// }
// ​
// ​
// //SQLエラー関数：sql_error($stmt)
// function sql_error($stmt){
//     $error = $stmt->errorInfo();
//     exit("SQLError:" . print_r($error, true));
// }
// ​
// //リダイレクト関数: redirect($file_name)
// function redirect($file_name){
//     header("Location: ".$file_name);
//     exit();
// }
// 折りた