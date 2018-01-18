<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  
	<title>Pravilnaya logistika</title>
</head>
	<header>
    <div class="container clearfix">
      <div class="mobile-menu">
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
      <a class="logo" href="index.html"><img src="img/Logo1.png" width="183" height="61" alt="Логотип"></a>
      <nav class="main-navigation">
        <ul>
          <li><a href="#company">о компании</a></li>
          <li><a href="#price">цены</a></li>
          <li><a href="#contacts">контакты</a></li>
          <li><a class="order" href="#mobile-block-order">заказать звонок</a></li>
        </ul>
      </nav>
    </div>
  </header>
<body>
  <main class="container">
    <h1 class="title">Грузчики и грузоперевозки в Новосибирске</h1>
    <div class="about-company">
      <h2 class="section-title" id="company">О компании</h2>
      <p class="section-text">Наша компания работает на рынке услуг не так давно, поэтому нам важно сделать все для наших клиентов максимально качественно. Мы работаем с клиентами из Новосибирска. Самым важным для нас всегда будет добиться результата, который хочет получить наш клиент.</p>
    </div>
    <div class="features clearfix">
      <h2 class="section-title">Преимущества нашей компании</h2>
      <p class="section-text">Ваш груз - наша ответственность. Свяжитесь с диспетчером, что бы узнать о специальных предложениях при заключении договора</p>
      <div class="features-items">
        <h3 class="features-name">Предприимчивость</h3>
        <p class="features-text">Мы не так давно на рынке и это позволяет делать нашу работу качественно что бы не запятнать нашу репутацию</p>
      </div>
      <div class="features-items">
        <h3 class="features-name">Команда</h3>
        <p class="features-text">Опыт наших сотрудников от 10 лет - мы работаем только с профессиональной командой, готовой к различным вызовам</p>
      </div>
      <div class="features-items">
        <h3 class="features-name">Поддержка</h3>
        <p class="features-text">На всех этапах работы наш диспетчер поможет вам решить все возникающие вопросы</p>
      </div>
    </div>
    <div class="price clearfix" id="price">
      <h2 class="section-title">Наши цены</h2>
      <p class="section-text">Подробнее о стоимости уточняйте у диспетчера</p>
      <div class="index-content">
        <p class="price-hour">
          <span>Переезды</span>
          <span>250₽/Ч</span>
        </p>
        <p class="type-service">
          <span class="service">Квартиры</span>
          <span class="service">Офисные</span>
          <span class="service">Дачные</span>
        </p>
        <p class="price-hour">
          <span>Газели</span>
          <span>470₽/Ч</span>
        </p>
      </div>
      <div class="index-content">
        <p class="price-hour">
          <span>Грузчики</span>
          <span>280₽/Ч</span>
        </p>
        <p class="type-service">
          <span class="service">Стройматериалы</span>
          <span class="service">Строймусор</span>
          <span class="service">Складская работа</span>
        </p>
        <p class="price-hour">
          <span>3-Х тонник</span>
          <span>650₽/Ч</span>
        </p>
      </div>
      <div class="index-content">
        <p class="price-hour">
          <span>Другое</span>
          <span>300₽/Ч</span>
        </p>
        <p class="type-service">
          <span class="service">Другая</span>
          <span class="service">не стандартная</span>
          <span class="service">работа</span>
        </p>
        <p class="price-hour">
          <span>5-И тонник</span>
          <span>800₽/Ч</span>
        </p>
      </div>
    </div>
    <div class="work-condition">
      Стоимость Работы в ночное время и холодную погоду(>-20) уточняйте у диспетчера
    </div>
    <div class="contacts clearfix" id="contacts">
      <h2 class="contacts-title">Наши контакты</h2>
      <p class="contacts-text">Вы можете связаться с нами по этим данным и мы обязательно ответим!</p>
      <p>Телефон: 277-30-13<br>
        Почта: Pravilnayalogistika@ya.ru
      </p>
    </div>
    <div class="mobile-block-order">
      <h2 class="modal-content-title">Заказать звонок</h2>
      <p>Введите своё имя и номер телефона</p>
      <form class="order-call" action="" method="post">
        <input class="icon-user" type="text" name="user" placeholder="Имя">
        <input class="icon-phone" type="text" name="phone" placeholder="Номер">
        <button class="btn" type="submit">Заказать звонок</button>
      </form>
    </div>
  </main>
  <footer>
    <div class="container">
      <div class="copyright">
        Copyright © 2017
      </div>
    </div>
  </footer>
  <div class="modal-content">
    <button class="modal-content-close" type="button" title="Закрыть">&#10006;</button>
    <h2 class="modal-content-title">Заказать звонок</h2>
    <p>Введите своё имя и номер телефона</p>
    <form class="order-call" action="callback.php" method="post">
      <input class="icon-user" type="text" name="user" placeholder="Имя">
      <input class="icon-phone" type="text" name="phone" placeholder="Номер">
      <button class="btn" type="submit">Заказать звонок</button>
    </form>
  </div>
  <script src="js/javascript.js"></script>
</body>
</html>