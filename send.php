<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像をアップロード</title>
        <meta name="description" content="画像ファイルをアップロードします。">
    </head>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    title:
    <input type="text" name="title"><br/>
    comments:
    <input type="text" name="text"><br/>
    アップロードする画像ファイルを選択する:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
    </form>
    </body>
</html>
<?php include('footer.php'); ?>