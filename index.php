<?php
$thankyou = 0;
if(isset($_POST['spam']) && isset($_POST['phone']) && !$_POST['spam']){
    if(trim($_POST['phone'])) {
        //дата отправки
        $date = date('d-m-Y H:i');
        //значение из поля name, ограничим в 100 символов
        $field_name = substr(htmlspecialchars(trim($_POST['name'])), 0, 100);
        //значение поля message, ограничим в 100 символов
        $field_phone = substr(htmlspecialchars(trim($_POST['phone'])), 0, 100);

        $to = "a.korshunova@ukr.net"; //кому
        $subject = "Данные с формы обратной связи"; //тема письма
        //текст письма
        $msg = "Имя: $field_name
        \nТелефон: $field_phone";

        $headers = 'From: webmaster@elite-flats.com.ua'; //от кого

        mail($to, $subject, $msg, $headers);//отправляем письмо

        //сформируем строку для записи в файл на сервере
        $file_msg = "$date Имя: $field_name; Телефон: $field_phone;\n";

        //записуем данные в файл
        file_put_contents(__DIR__ . '/mail.txt', $file_msg, FILE_APPEND);

        $thankyou = 1;

    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,400,400i,500,500i,700,700i,900,900i&amp;amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="/js/app.min.js"></script>
    <title>Document</title>
  </head>
  <body<?php echo $thankyou ? ' class="thank_form"': "";?>>
    <main class="main_wrapp">
      <header class="header">
        <div class="header__wrapp">
          <div class="header__wr-logo"><img src="images/logo_header.png"></div>
          <div class="header__tel"><a href="tel:+38 063 587 95 65">+38 063 587 95 65 </a></div>
        </div>
      </header>
      <section class="section section__banner">
        <div class="section_banner__block-info">
          <h3 class="block-info__subtitle">ЖИЛОЙ КОМПЛЕКС</h3>
          <h1 class="block-info__title">ПОКРОВСКИЙ ПОСАд</h1>
          <div class="block-info__text">
            <p>В окружении известных достопримечательностей и подольских склонов Покровский Посад величественно возвышается на Кудрявском холме.</p>
            <p>С высоты жилых башен открываются панорамные виды на подольские склоны, а у подножья кипит активная деловая и культурная жизнь исторического центра Киева.</p>
            <p>Здесь вы выбираете – быть в центре городских событий или уединиться в тихом парковом сквере им. Алиева, прогуляться Андреевским спуском или же весело провести время с друзьями на Воздвиженке в ресторанах Димы Борисова.</p>
          </div>
        </div>
      </section>
      <section class="section section__apartments">
        <div class="apartments__wrapp">
          <h2 class="apartments__title">Квартиры</h2>
          <div class="apartments__tab_wr">
            <div class="apartments__tab-navigate">
              <div class="tab-navigate__item">2-x Комнатная 74,7 кв.м</div>
              <div class="tab-navigate__item">2-x Комнатная 74,9 кв.м</div>
              <div class="tab-navigate__item">3-x Комнатная 92,9 кв.м</div>
              <div class="tab-navigate__item">3-x Комнатная 94,1 кв.м</div>
              <div class="tab-navigate__item">3-x Комнатная 99,4 кв.м</div>
              <div class="tab-navigate__item">3-x Комнатная 101,5 кв.м</div>
            </div>
          </div>
          <div class="apartments__tab-content_wr">
            <div class="apartments__tab-content active">
              <div class="apartments__slick-wr">
                <div class="apartments-slider">
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic2.png');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic3.png');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic4.png');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic1.jpg');"></div>
                </div>
                <div class="slider-nav">
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic2.png');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic3.png');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic4.png');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic1.jpg');"></div>
                </div>
              </div>
              <div class="apartments__decription">
                <h4 class="decription__title">2-x Комнатная</h4>
                <div class="decription__content-wr">
                  <div class="flex-row">Общая площадь<span class="square">74,7 кв.м</span></div>
                  <div class="flex-rows">
                    <div class="flex-col">Жилая  площадь</div>
                    <div class="flex-col">Холл</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">40,8 кв.м</div>
                    <div class="flex-cols">10,3 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Кухня</div>
                    <div class="flex-col">Гостинная</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">16,9 кв.м</div>
                    <div class="flex-cols">25 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Спальня</div>
                    <div class="flex-col">Санузел</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15,8  кв.м</div>
                    <div class="flex-cols">6,3 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Спальня</div>
                    <div class="flex-col">Балкон</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15,8  кв.м</div>
                    <div class="flex-cols">0,4 кв.м</div>
                  </div>
                  <div class="decription__info">Дизайнерский ремонт, современная мебель и бытовая техника бизнес-класса, камин, закрытая охраняемая территория, подземный паркинг.</div><a class="open_modal button_blue" href="#call_back">Обратная связь</a>
                </div>
              </div>
            </div>
            <div class="apartments__tab-content">
              <div class="apartments__slick-wr">
                <div class="apartments-slider">
                  <div class="slick-slider__item" style="background-image: url('../images/74.9/pic2.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.9/pic3.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.9/pic4.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.9/pic1.jpg');"></div>
                </div>
                <div class="slider-nav">
                  <div class="slider-nav__item" style="background-image: url('../images/74.9/pic2.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.9/pic3.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.9/pic4.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.9/pic1.jpg');"></div>
                </div>
              </div>
              <div class="apartments__decription">
                <h4 class="decription__title">2-x Комнатная</h4>
                <div class="decription__content-wr">
                  <div class="flex-row">Общая площадь<span class="square">74,9 кв.м</span></div>
                  <div class="flex-rows">
                    <div class="flex-col">Жилая  площадь</div>
                    <div class="flex-col">Холл</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">41,5 кв.м</div>
                    <div class="flex-cols">7,0 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Кухня</div>
                    <div class="flex-col">Гостинная</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">17,0 кв.м</div>
                    <div class="flex-cols">25,6 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Спальня</div>
                    <div class="flex-col">Санузел</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15,9 кв.м</div>
                    <div class="flex-cols">6,0 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Гардероб</div>
                    <div class="flex-col">Балкон</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">3,0 кв.м</div>
                    <div class="flex-cols">0,4</div>
                  </div>
                  <div class="decription__info">Дизайнерский ремонт, современная мебель и бытовая техника бизнес-класса, камин, закрытая охраняемая территория, подземный паркинг.</div><a class="open_modal button_blue" href="#call_back">Обратная связь</a>
                </div>
              </div>
            </div>
            <div class="apartments__tab-content">
              <div class="apartments__slick-wr">
                <div class="apartments-slider">
                  <div class="slick-slider__item" style="background-image: url('../images/99.4/pic1.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/99.4/pic2.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/99.4/pic3.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/99.4/pic4.jpg');"></div>
                </div>
                <div class="slider-nav">
                  <div class="slider-nav__item" style="background-image: url('../images/99.4/pic1.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/99.4/pic2.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/99.4/pic3.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/99.4/pic4.jpg');"></div>
                </div>
              </div>
              <div class="apartments__decription">
                <h4 class="decription__title">2-x Комнатная</h4>
                <div class="decription__content-wr">
                  <div class="flex-row">Общая площадь<span class="square">92,9 кв.м</span></div>
                  <div class="flex-rows">
                    <div class="flex-col">Жилая  площадь</div>
                    <div class="flex-col">Холл</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">70,0 кв.м</div>
                    <div class="flex-cols">8,9 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Кухня</div>
                    <div class="flex-col">Гостинная</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">13,8 кв.м</div>
                    <div class="flex-cols">34,6 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Детская</div>
                    <div class="flex-col">Спальня</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15  кв.м</div>
                    <div class="flex-cols">20,4 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Санузел 1</div>
                    <div class="flex-col">Санузел 2</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">2,1 кв.м</div>
                    <div class="flex-cols">6,3 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Балкон</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">0,4 кв.м</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="decription__info">Дизайнерский ремонт, панорамный вид, встроенная кухня с элитной бытовой техникой, шкафы-купе, мебель и техника ведущих мировых производителей, кондиционеры, 2 санузла.</div><a class="open_modal button_blue" href="#call_back">Обратная связь</a>
                </div>
              </div>
            </div>
            <div class="apartments__tab-content">
              <div class="apartments__slick-wr">
                <div class="apartments-slider">
                  <div class="slick-slider__item" style="background-image: url('../images/94.1/pic2.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/94.1/pic3.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/94.1/pic4.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/94.1/pic1.jpg');"></div>
                </div>
                <div class="slider-nav">
                  <div class="slider-nav__item" style="background-image: url('../images/94.1/pic2.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/94.1/pic3.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/94.1/pic4.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/94.1/pic1.jpg');"></div>
                </div>
              </div>
              <div class="apartments__decription">
                <h4 class="decription__title">3-x Комнатная</h4>
                <div class="decription__content-wr">
                  <div class="flex-row">Общая площадь<span class="square">94,1 кв.м</span></div>
                  <div class="flex-rows">
                    <div class="flex-col">Жилая  площадь</div>
                    <div class="flex-col">Холл</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">70 кв.м</div>
                    <div class="flex-cols">8,9 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Кухня</div>
                    <div class="flex-col">Гостинная</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">13,8 кв.м</div>
                    <div class="flex-cols">34,6 кв.м</div>
                  </div>
                  <div class="flex-rows"></div>
                  <div class="flex-rows">
                    <div class="flex-col">Детская</div>
                    <div class="flex-col">Спальня</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15  кв.м</div>
                    <div class="flex-cols">20,4 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Санузел 1</div>
                    <div class="flex-col">Санузел 2</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">2,1 кв.м</div>
                    <div class="flex-cols">6,3 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Балкон</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">0,4 кв.м</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="decription__info">Дизайнерский ремонт, современная мебель и бытовая техника бизнес-класса, камин, закрытая охраняемая территория, подземный паркинг.</div><a class="open_modal button_blue" href="#call_back">Обратная связь</a>
                </div>
              </div>
            </div>
            <div class="apartments__tab-content">
              <div class="apartments__slick-wr">
                <div class="apartments-slider">
                  <div class="slick-slider__item" style="background-image: url('../images/92.9/pic2.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/92.9/pic3.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/92.9/pic4.jpg');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/92.9/pic1.jpg');"></div>
                </div>
                <div class="slider-nav">
                  <div class="slider-nav__item" style="background-image: url('../images/92.9/pic2.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/92.9/pic3.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/92.9/pic4.jpg');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/92.9/pic1.jpg');"></div>
                </div>
              </div>
              <div class="apartments__decription">
                <h4 class="decription__title">3-x Комнатная</h4>
                <div class="decription__content-wr">
                  <div class="flex-row">Общая площадь<span class="square">99,4 кв.м</span></div>
                  <div class="flex-rows">
                    <div class="flex-col">Жилая  площадь</div>
                    <div class="flex-col">Холл</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">70,9 кв.м</div>
                    <div class="flex-cols">6,1 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Кухня</div>
                    <div class="flex-col">Гостинная</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">12,0 кв.м</div>
                    <div class="flex-cols">34,9 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Детская</div>
                    <div class="flex-col">Спальня</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15  кв.м</div>
                    <div class="flex-cols">21 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Санузел 1</div>
                    <div class="flex-col">Санузел 2</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">6 кв.м</div>
                    <div class="flex-cols">4 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Балкон</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">0,4 кв.м</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="decription__info">Дизайнерский ремонт, современная мебель и бытовая техника бизнес-класса, камин, закрытая охраняемая территория, подземный паркинг.</div><a class="open_modal button_blue" href="#call_back">Обратная связь</a>
                </div>
              </div>
            </div>
            <div class="apartments__tab-content">
              <div class="apartments__slick-wr">
                <div class="apartments-slider">
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic2.png');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic3.png');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic4.png');"></div>
                  <div class="slick-slider__item" style="background-image: url('../images/74.7/pic1.jpg');"></div>
                </div>
                <div class="slider-nav">
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic2.png');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic3.png');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic4.png');"></div>
                  <div class="slider-nav__item" style="background-image: url('../images/74.7/pic1.jpg');"></div>
                </div>
              </div>
              <div class="apartments__decription">
                <h4 class="decription__title">3-x Комнатная</h4>
                <div class="decription__content-wr">
                  <div class="flex-row">Общая площадь<span class="square">101,5 кв.м</span></div>
                  <div class="flex-rows">
                    <div class="flex-col">Жилая  площадь</div>
                    <div class="flex-col">Холл</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">70,0 кв.м</div>
                    <div class="flex-cols">8,9 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Кухня</div>
                    <div class="flex-col">Гостинная</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">13,8 кв.м</div>
                    <div class="flex-cols">34,6 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Детская</div>
                    <div class="flex-col">Спальня</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">15  кв.м</div>
                    <div class="flex-cols">20,4 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Санузел 1</div>
                    <div class="flex-col">Санузел 2</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">2,1 кв.м</div>
                    <div class="flex-cols">6,3 кв.м</div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-col">Балкон</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="flex-rows">
                    <div class="flex-cols">0,4 кв.м</div>
                    <div class="flex-cols"></div>
                  </div>
                  <div class="decription__info">Дизайнерский ремонт, современная мебель и бытовая техника бизнес-класса, камин, закрытая охраняемая территория, подземный паркинг.</div><a class="open_modal button_blue" href="#call_back">Обратная связь</a>
                </div>
              </div>
            </div>
          </div>
          <div class="section_advantages">
            <div class="fl-row">
              <div class="section_advantages__box-img one"><img src="images/pre1.jpg"></div>
              <h3 class="section_advantage__title">ПРЕИМУЩЕСТВА КОМПЛЕКСА</h3>
            </div>
            <div class="fl-row top">
              <div class="section_advantages__box-img two"><img src="images/pre2.jpg"></div>
              <div class="section_advantages__text">
                <h4 class="text__title">Гарантированная Безопасность</h4>
                <p>Красивы внутрений двор, детская площядка, магазины, рестораны и кафе</p>
                <h4 class="text__title">Оформленная  инфраструктура</h4>
                <p>Система видеонаблюдения на территории, три контрольно-пропускных пункта, огражденная, охраняемая территория</p>
                <h4 class="text__title">Удобное  расположение</h4>
                <p>Рядом парк им. Г. Алиева, 5 минут до ул. Крещатик, Рядом Покровский собор, готовый и заселенный комплекс премиум класса в центре города</p>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="footer__contact">
            <div class="footer__inf">Информация по телефону</div>
            <div class="footer__tell"><a href="tel:+38 063 587 95 65">+38 063 587 95 65 </a></div>
          </div>
          <div class="modal_overlay"></div>
          <div class="wr-call-back modal_div" id="call_back">
            <div class="form-title">Обратная связь</div>
            <form  method="POST">
              <div class="wr-input">
                <input type="text" name="name" placeholder="Ваше имя">
              </div>
              <div class="wr-input">
                <input type="text" name="phone" placeholder="Введите ваш номер">
              </div>
              <input type="hidden" name="spam">
              <button class="button_blue">Отправить</button>
            </form>
          </div>
            <?php
            if($thankyou){
            ?>
            <div class="wr-call-back modal_div system-mess">
                <p>Спасибо за Ваше сообщение, наш менеджер свяжется с Вами в ближайшее время</p>
            </div>
              <?php }?>
        </footer>
      </section>
    </main>
  </body>
</html>