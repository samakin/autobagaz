<?php
include ($_SERVER["DOCUMENT_ROOT"]."/modules/keywords.php");
include ($_SERVER["DOCUMENT_ROOT"]."/modules/headtags.php");
echo "<title> $titleconst"; echo $keywords[22][title]; echo "</title>";
echo "<meta name='description' content='"; echo $keywords[22][description]; echo "'/>";
echo "<meta name='keywords' content='"; echo $keywords[22][keywords]; echo "'/>"; ?>

<div class="wrapper">
    <?php include ($_SERVER["DOCUMENT_ROOT"]."/modules/header/header.php");?>
    <div class="wrapper-content">
        <?php include ($_SERVER["DOCUMENT_ROOT"]."/modules/left-nav/left-nav.html");?>
        <div class="content">
            <?php $_SESSION['url'] = $_SERVER['REQUEST_URI'];

            echo "<h1 class='page__title-h1'>Фаркопы</h1>";
            echo "<p class='page__text'>В современном мире автомобиль уже не роскошь, а средство передвижения. Зачастую, помимо комфортной езды появляется необходимость перевозки длинномерного, широкого, или сыпучего груза. Часть задач можно снять <a class='page__link' href='/autobagazhniki'>багажником (дугами на крыше)</a>, но для некоторых грузов,таких как песок, щебень и др. - идеально подходит прицеп. Для надежного соединения автомобиля с прицепом служит специальное устройство - фаркоп (ТСУ). Так же, помимо перевозки грузов фаркопы используются для установки платформ для боксов или <a class='page__link' href='/velokreplenya_na_farkop'>велокреплений на фаркоп</a>.</p>";
            echo "<p class='page__text'>Тягово-сцепные устройства (фаркопы) различают на несколько видов, в зависимости от способа установки, нагрузок, защиты от кражи и проч:</p>"; ?>

            <ol class="page__list">
                <div class="img_div">
                    <img class="img_main" src="/images/farkops/a.jpg" srcset="/images/farkops/a.jpg 200w" alt="фаркоп тип А" sizes="(max-width: 2000px) 150px, 300px, 350px">
                </div><br>
                <li>фаркоп с шаром-крюком «Типа А»- самый распространенный вид ТСУ на данный момент. Имеет жесткое крепление рамы фаркопа к кузову автомобиля, а так же крюк, зажимаемый в пластинах, при помощи болтового соединения. Часто ,так же, такой вид фаркопов называют «усло-съемным», из-за возможности легкого демонтажа-просто открутите 2 болта и гайки.<br><br>Максимально допустимый вес прицепа с грузом-1500 кг. Нагрузка на шар-не более 150.</li>

                <li>фаркопы с шаром типа В - съемный, полуавтоматический крюк на гайке.</li>

                <div class="img_div">
                    <img class="img_main" src="/images/farkops/c.jpg" srcset="/images/farkops/c.jpg 450w" alt="фаркоп тип C" sizes="(max-width: 2000px) 150px, 300px, 350px">
                </div><br>
                <li>фаркопы с шаром типа С - съемные шары на двух болтах, оборудованные системой "Eco-Fit"</li>

                <div class="img_div">
                    <img class="img_main" src="/images/farkops/e.jpg" srcset="/images/farkops/e.jpg 450w" alt="фаркоп тип E" sizes="(max-width: 2000px) 150px, 300px, 350px">
                </div><br>
                <li>Фаркопы с шаром типа Е - зачастую, американский образец, выполненный в виде вставки под квадрат размерами 30х30 или 50х50мм. Требуют подготовленной базы на автомобиле, либо устанавливается отдельно. Установленный шар в приемник фиксируется при помощи «пальца» и пружинной скобы.<br><br>Один из самых надежных видов фаркопов-на некоторые образцы допустимы нагрузки и в 5-7 тонн.</li>

                <div class="img_div">
                    <img class="img_main" src="/images/farkops/f.jpg" srcset="/images/farkops/f.jpg 450w" alt="фаркоп тип F" sizes="(max-width: 2000px) 150px, 300px, 350px">
                </div><br>
                <li>ТСУ с шаром типа F-фланцевые, кованые шары с 2-мя отверстиями для монтажа</li>

                <div class="img_div">
                    <img class="img_main" src="/images/farkops/G.jpg" srcset="/images/farkops/G.jpg 450w" alt="фаркоп тип G" sizes="(max-width: 2000px) 150px, 300px, 350px">
                </div><br>
                <li>ТСУ с шаром типа G- он же но под 4 болта, с нагрузкой до 3500 кг</li>

                <div class="img_div">
                    <img class="img_main" src="/images/farkops/H.jpg" srcset="/images/farkops/H.jpg 450w" alt="фаркоп тип H" sizes="(max-width: 2000px) 150px, 300px, 350px">
                </div><br>
                <li>Фаркопы с шаром типа H-полностью сварное изделие</li>
            </ol>

            <?php echo "<p class='page__text'>Особой экзотикой являются фаркопы, имеющие электропривод, позволяющий спрятать шар под автомобилем,не снимая его.</p>";
            echo "<p class='page__text'>Крайне важно понимать, что автомобиль с прицепом является средством повышенной опасности на дороге, потому к выбору ТСУ необходимо подойти максимально ответственно.</p>";
            echo "<p class='page__text'>Следует учесть характер планируемых грузов: вес, длина и пр.</p>";
            echo "<p class='page__text'>Так как все фаркопы разрабатываются под конкретный автомобиль, следует учитывать: марку и модель машины, год выпуска, тип кузова. Часто на один автомобиль существует 7-12 вариантов ТСУ. Правильно подобрать надежный вариант Вам помогут наши специалисты, просто позвоните нам, или <a class='page__link' href='/buy'>заполните заявку</a> на сайте и мы с вами свяжемся.</p>";
            echo "<p class='page__text'>Мы работаем только с качественными, сертифицированными фаркопами лучших производителей мира ,такими как: Thule (Швеция), Brink (Нидерланды),Bosal (Россия), Imiola (Польша), Galia (Словакия), Westfalia (Германия), Лидер+ (Россия), Трейлер (Россия), Балтекс (Россия) и др.</p>";
            echo "<p class='page__text'>Также готовы предоставить Вам монтаж в нашем сертифицированном сервисе. На гарантию автомобиля наша работа не повлияет.</p>";

            include ($_SERVER["DOCUMENT_ROOT"]."/modules/forms/helpform.php"); ?>
        </div>
    </div>
    <?php include ($_SERVER["DOCUMENT_ROOT"]."/modules/footer/footer.html");
    include ($_SERVER["DOCUMENT_ROOT"]."/modules/counters.html"); ?>
</div>