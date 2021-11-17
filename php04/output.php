<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ユーザ一覧</title>
</head>
<body>
<h2>ユーザ一覧</h2>
<?php
$keyword = $_GET["keyword"]; // フォームデータ"keyword"の取得
echo "<p>検索キーワード: {$keyword}</p>";
try { // データベース処理の例外範囲始まり
// データベースへの接続
$db = new PDO('mysql:host=localhost:63306;dbname=j19317_db1;charset=utf8','j19317','19365');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDOエラー時に例外発生させるように設定
// SQL文の準備と実行???????????
$sql = $db->prepare('SELECT * FROM user WHERE tel like ?');
$sql->bindValue(1,"%{$keyword}%"); // $sql->bindValue(1,"%".$keyword."%");でも同じ． 
$sql->execute();

echo "<table border=1> ";
echo "<caption>検索結果</caption>";
echo "<tr style='background-color:#99FF99'>
      <th>User_id</th>
      <th>Name</th>
      <th>Tel</th>
      <th>Address</th>
      <th>Birth</th>
      <th>reg_date</th>
      </tr>";
while ($row = $sql->fetch()) {
    echo "<tr style='background-color:#EEEEEE'>";
    echo "<td>".$row['user_id'] . "</td> ";
    echo "<td>". $row['name'] . "</td> ";
    echo "<td>". $row['tel'] . "</td> ";
    echo "<td>". $row['address'] . "</td> ";
    echo "<td>". $row['birth'] . " </td>";
    echo "<td>". $row['reg_date'] . "</td>"."<br>";
    echo "</tr>";
}
echo "</table>";
} catch (PDOException $e) { // データベース処理の例外キャッチ
exit('データベース処理失敗：' . $e->getMessage());
}
?>