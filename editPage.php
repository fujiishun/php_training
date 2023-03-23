<?php include('header.php'); ?>
<h1>hennsyuu</h1>
    <form action="edit.php?id=<?php print($_GET['id']) ?>" method="post" enctype="multipart/form-data">
    title:
    <input type="text" name="title"><br/>
    comments:
    <input type="text" name="text"><br/>
    アップロードする画像ファイルを選択する:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Update">
<?php include('footer.php'); ?>