<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Мой сайт</title>
<style>
.tabcontent {
  display: none;
}
</style>
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'home')">Главная</button>
  <button class="tablinks" onclick="openTab(event, 'cars')">Выбор авто</button>
  <button class="tablinks" onclick="openTab(event, 'contact')">Контакты</button>
</div>

<div id="home" class="tabcontent">
    <h1>Добро пожаловать на сайт проката автомобилей</h1>
    <p>Наш сайт работает уже много лет и предлагает широкий выбор автомобилей для аренды по доступным ценам.</p>
    
    <h2>Функционал сайта:</h2>
    <ul>
        <li>Большой выбор автомобилей различных марок и классов</li>
        <li>Простая процедура бронирования и заказа автомобиля онлайн</li>
        <li>Гибкая система скидок и специальных предложений</li>
        <li>Удобные условия аренды и гибкий график возврата</li>
        <li>Профессиональная поддержка клиентов и оперативное решение возникших вопросов</li>
    </ul>
    
    <h2>Как заказать автомобиль на прокат?</h2>
    <p>Для того чтобы арендовать автомобиль, просто выберите желаемую модель из нашего каталога, укажите даты аренды и заполните форму заказа на сайте. Наш менеджер свяжется с вами для подтверждения бронирования.</p>
    
    <p>Не упустите возможность насладиться комфортом и свободой передвижения с нашими автомобилями! Мы ждем вас на нашем сайте.</p>

</div>

<div id="cars" class="tabcontent">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор авто</title>

    <h1>Выберите автомобиль для аренды</h1>

    <div class="car">
        <h2>Автомобиль 1</h2>
        <p>Характеристики: Audi, Год выпуска - 2010, Объем двигателя - 100 л , Мощность - 300 л.с. </p>
        <p>Стоимость аренды: 5000 рублей - день</p>

        
        <button onclick="rentCar(1)">Арендовать</button>
    </div>

    <div class="car">
        <h2>Автомобиль 2</h2>
        <p>Характеристики: ВАЗ, Модель - 2101, Год выпуска - 2000, Объем двигателя - 100л, Мощность - 200 л.с.</p>
        <p>Стоимость аренды: 3000 рублей - день</p>
        <button onclick="rentCar(2)">Арендовать</button>
    </div>

 

    <script>
        function rentCar(carId) {
            alert("Вы арендовали автомобиль " + carId);
          
        }
    </script>

</div>

<div id="contact" class="tabcontent">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>

    <h1>Контакты</h1>

    <p>Для заказа автомобиля или получения дополнительной информации, пожалуйста, свяжитесь с нами:</p>

    <ul>
        <li>Телефон: +7 (123) 456-7890</li>
        <li>Электронная почта: info@rentacar.com</li>
        <li>Менеджер по аренде автомобилей: Иван Иванов</li>
    </ul>


</div>

<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>