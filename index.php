<?php include('header.php'); ?>

<?php
    // データベース設定ファイルを含む
    include 'dbConfig.php';

    // データベースから画像を取得する
    $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $id = $row["id"];
            $title = $row["title"];
            $imageURL = 'uploads/'.$row["file_name"];
            $text = $row["text"];
    ?>
        <a href="editPage.php?id=<?php print($row['id']) ?>">
            <?php echo "id:".$id;
            echo '</a><br>';
            echo "タイトル： ".$title;
        ?>
        <br/>
        <img src="<?php echo $imageURL; ?>" width="200" height="140" alt="" /><br/>
        <?php echo "本文： ".$text;
        ?><br/>
        <a href="delete.php?id=<?php print($row['id']) ?>">削除</a><hr/>
    <?php }
    }else{ ?>
        <p>投稿が見つからず表示されません..
        </p>
    <?php } ?>

<?php include('footer.php'); ?>