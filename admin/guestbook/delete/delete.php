<?php echo "<title>Отзыв удален!</title>";
include ($_SERVER["DOCUMENT_ROOT"]."/backend/blocks/metatagslight.php"); ?>

<div class="admin__container">
    <?php
    $dbname = "9082410193_zakaz";

    include ($_SERVER["DOCUMENT_ROOT"]."/backend/connectdb.php");

    $id=$_REQUEST['rewiew'];
    $delete_sql = "DELETE FROM guestbook WHERE id=$id";
    mysqli_query($connect, $delete_sql) or die("<p class='text'>При удалении отзыва произошла ошибка</p>". mysqli_error());
    echo "<h3 class='title title-h3'>Отзыв успешно удален!</h3>";
    ?>
    <div class="admin__link-wrap clearfix">
        <a class="admin__link" href="/admin/guestbook/delete/guestdelete.php">Вернуться к выбору отзывов</a>
        <a class="admin__link" href="/admin/index.php">Вернуться на главную админки</a>
    </div>
</div>