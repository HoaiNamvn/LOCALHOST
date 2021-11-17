<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>書籍一覧</title>
</head>
<body>
<h2>書籍一覧</h2>
<?php
if( isset($_GET["keyword"]) && $_GET["keyword"]!="" ){
    $keyword = $_GET["keyword"]; // フォームデータ"keyword"の取得
    echo "<p>検索キーワード: {$keyword}</p>";
    } else {
    $keyword = "";
    }
    
try { // データベース処理の例外範囲始まり
// データベースへの接続
$db = new PDO('mysql:host=localhost:63306;dbname=j19317_db1;charset=utf8','j19317','19365');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDOエラー時に例外発生させるように設定
// SQL文の準備と実行???????????
$sql = $db->prepare("SELECT * FROM book WHERE title like ? OR author like ?");
$sql->bindValue(1,"%{$keyword}%"); // $sql->bindValue(1,"%".$keyword."%");でも同じ． 
$sql->bindValue(2,"%{$keyword}%");
$sql->execute();

echo "<table border=1> ";
echo "<caption>検索結果</caption>";
echo "<tr style='background-color:#99FF99'>
      <th>ISBN</th>
      <th>title</th>
      <th>author</th>
      <th>publisher</th>
      <th>pub_data</th>
      <th>price</th>
      </tr>";
while ($row = $sql->fetch()) {
    echo "<tr style='background-color:#EEEEEE'>";
    echo "<td>".$row['ISBN'] . "</td> ";
    echo "<td>" . str_replace($keyword,"<mark>{$keyword}</mark>",$row['title']) . "</td>";
    echo "<td>" . str_replace($keyword,"<mark>{$keyword}</mark>",$row['author']) . "</td>";    echo "<td>". $row['publisher'] . "</td> ";
    echo "<td>". $row['pub_date'] . " </td>";
    echo "<td>". $row['price'] . "</td>"."<br>";
    echo "</tr>";
}
echo "</table>";
} catch (PDOException $e) { // データベース処理の例外キャッチ
exit('データベース処理失敗：' . $e->getMessage());
}
?>