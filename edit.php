<?php
// データベース設定ファイルを含む
include 'dbConfig.php';
$statusMsg = '';
// ファイルのアップロード先
$id = $_GET['id'];
$targetDir = "uploads/";
$title = $_POST["title"];
$text = $_POST["text"];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // 特定のファイル形式の許可
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // サーバーにファイルをアップロード
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
    if($title){
    $sql1 = "UPDATE images SET title = '$title' WHERE id = $id";
    $stmt = $db->query($sql1);
    }
    if($fileName){
    $sql2 = "UPDATE images SET file_name = '$fileName' WHERE id = $id";
    $stmt = $db->query($sql2);
    }
    if($text){
    $sql3 = "UPDATE images SET text = '$text' WHERE id = $id";
    $stmt = $db->query($sql3);
    }
    if($sql1 || $sql2 || $sql3){
        $statusMsg = "正常にアップロードされました";
    }else{
        $statusMsg = "ファイルのアップロードに失敗しました、もう一度お試しください";
    } 
}else{
    $statusMsg = "申し訳ありませんが、ファイルのアップロードに失敗しました";
}
}else{
$statusMsg = '申し訳ありませんが、アップロード可能なファイル（形式）は、JPG、JPEG、PNG、GIF、PDFのみです';
}
}else{
$statusMsg = 'アップロードするファイルを選択してください';
}

// ステータスメッセージを表示
echo $statusMsg;
?>
<br/>
<a href="http://localhost:8888/php_lesson01/">Home</a>