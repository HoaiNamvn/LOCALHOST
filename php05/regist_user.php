<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>書籍登録</title>
</head>
<body>
<h2>書籍登録</h2>
<?php
// フォームデータの取得
$ISBN = $_GET["ISBN"];
$title = $_GET["title"];
$author = $_GET["author"];
$publisher = $_GET["publisher"];
$pub_date = $_GET["pub_date"];
$price = $_GET["price"];
try { // データベース処理の例外範囲始まり
// データベースへの接続
$db = new PDO('mysql:host=localhost:63306;dbname=j19317_db1;charset=utf8','j19317','19365');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDOエラー時に例外発生させるように設定

// SQL文の準備と実行
$sql = $db->prepare("INSERT INTO book(ISBN,title,author,publisher,pub_date,price) VALUES(?,?,?,?,?,?)");
$sql->bindValue(1, $ISBN);
$sql->bindValue(2, $title);
$sql->bindValue(3, $author);
$sql->bindValue(4, $publisher);
$sql->bindValue(5, $pub_date);
$sql->bindValue(6, $price);
$sql->execute();
} catch( PDOException $e ){ // データベース処理の例外キャッチ
exit('データベース処理失敗：'.$e->getMessage());
}
echo "データベースに以下の書籍情報を登録しました。";
echo "<p>";
echo "ISBN: {$ISBN}<br>";
echo "書名: {$title}<br>";
echo "著者名: {$author}<br>";
echo "出版社: {$publisher}<br>";
echo "発行日: {$pub_date}<br>";
echo "価格: {$price}";
echo "</p>";
echo "<a href='search_book.php'>書籍一覧ページへ</a>";
?>
</body>
</html> 