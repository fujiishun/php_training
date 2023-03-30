<?php include('header.php'); ?>
<h1>検索ページ</h1>
    <form action="searchPage.php" method="post">
    ID:<input type="text" name="id" value="<?php echo $_POST['id']?>">
    <?php
        if(preg_match("/[^0-9]/", $_POST['id'])){
            echo " IDは数字で入力してください！";
        }
    ?>
    <br>
        <input type="submit">
    </form>
<?php include('footer.php'); ?>