<?php
$dbname = "9082410193_news";

include ($_SERVER["DOCUMENT_ROOT"]."/backend/connectdb.php");

$query = "SELECT * FROM `news` ORDER BY news_id DESC LIMIT 1";


if ($result = mysqli_query($connect, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="stock__container" '; echo $stylestock; echo '>';
        echo '<div class="stock__bg"></div>';
            echo '<div class="stock">';
                echo '<div class="stock__block">';
                echo '<h2 class="stock__title">'.$row['news_title'].'</h2>';
                echo '<p class="stock__description">'.$row['news_annotation'].'</p>';
                echo '<a onclick="yaCounter40650914.reachGoal(\'banner_click\'); return true" class="stock__link" href="'.$row['news_link'].'">Узнать итоги розыгрыша</a>';
            echo '</div>';
        echo '<div class="stock__block">';
            echo '<img class="stock__image" src="/images/stock/new-year.jpg">';
        echo '</div></div></div>';
    }
}