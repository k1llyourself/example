<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'AdlerySwash';
            src: url('storage/fonts/Adlery-Swash-trial.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        body {
            background: url('storage/stock/smallornament.png') repeat-y left;
            background-size: 40px;
            background-position: 20px 0;
            font-family: 'Play', sans-serif;
        }


        .required:after {
            content: '*';
            color: red;
        }

        .navbar {
            background-color: rgb(255, 255, 255);
            padding: 0;
        }


        .navbar {
    width: 100%;
    background-color: white;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
    position: -webkit-sticky;
    position: sticky;
    top: -100px;
    z-index: 998    ;
    transition: all 0.5s ease;
    opacity: 1 ;
}

.navbar.show {
    top: 0;
    opacity: 1;
    transform: translateY(0);
}


        .navbar-brand {
            font-family: 'AdlerySwash', sans-serif;
            padding-top: 15px;
            font-size: 40px;
            margin-right: 100px;
            color: rgb(163,24,24) !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }


        
        .selectionbar {
            background-color: black;
            display: flex;
            align-items: center;
            padding-left: 50px; /* Відступ від лівого краю екрану */
            position: relative;
        }

        .selectionbar-menu {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

@media (max-width: 768px) {
        .selectionbar {
        width: 100%;
        background-color: black;
        position: -webkit-sticky;
        position: sticky;
        top: -120px;
        z-index: 998    ;
        transition: all 0.5s ease;
        opacity: 1;
        }
        .selectionbar.show {
            top: 65;
            opacity: 1;
            transform: translateY(0);
        }

}

        .selectionbar-menu li {
            padding: 15px;
            position: relative; /* Для dropdown меню */
        }

        .selectionbar-menu li:last-child {
            margin-right: 0;
        }

        .selectionbar-menu a {
            color: white;
            font-size: 16px;
            text-decoration: none;
        }

        .selectionbar-menu a:hover {
            text-decoration: underline;
            color: white;
        }


        .dropdown a:hover {
            text-decoration: underline;
            color: black;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 53px; /* Відстань від верху */
            left: 0;
            z-index: 1000;
            min-width: 150px;
        }

        .dropdown-menu li {
            margin: 0;
        }

        .dropdown-menu a {
            color: black;
            font-size: 16px;
            padding: 5px 10px;

            white-space: nowrap;
        }

        .dropdown-menu li:hover {
            background-color: #c4c4c4;

        }

        .selectionbar-menu ul {
            border-radius: 0;
        }

        .dropdown{
            background-color: #2d5b52;
        }


        @media (max-width: 768px) {
    .navbar-brand {
        flex-grow: 1;
        font-size: 30px;
        margin-right: 0px;
    }

    .cart-icon-container-mobile {
        display: flex;
        align-items: center;
    }

    .search-bar-item {
        display: none;
    }



    
}


/* Бургер-меню */
.burger-menu {
    cursor: pointer;
    font-size: 40px;
    color: white;   
}

/* Шторка зліва */
.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #ffffff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 1000;
}

/* Іконка закриття */
.sidebar-header {
    display: flex;
    align-items: center; /* Вертикальне вирівнювання по центру */
    justify-content: space-between; /* Вирівнює елементи по краях */
    padding: 0px  0px 13px 0px;
    padding-top: 0px; /* Додайте відступи навколо контенту */   
    background-color: #ffffff; /* Фон для шторки (необов'язково) */
    position: relative; /* Для правильного позиціонування close-icon */
}

.sidebar .navbar-brand {
    font-size: 28px; /* Налаштуйте розмір шрифту для назви бренду */
    margin-right: 0px;
    text-decoration: none; /* Прибирає підкреслення */
    padding: 0px 0px 0px  8px ;
    margin-top: 20px;
}

.close-icon {
    font-size: 40px; /* Розмір хрестика */
    cursor: pointer;
    color: black;
    padding: 0px 8px 0px  0px ;
    /* Видалення абсолютного позиціонування, якщо не потрібно */
    
}

/* Зміст шторки */
.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #ffffff;
    display: block;
    transition: 0.3s;
}



/* При закритті */
.sidebar.closed {
    width: 0;
}

/* При відкритті */
.sidebar.open {
    width: 270px;
    padding-top: 0px;
    z-index: 1000;
}

/* Сховати підкатегорії за замовчуванням */
.custom-dropdown-submenu {
    display: none;
    list-style: none;
    padding-left: 20px;
}

/* Відкриття підкатегорій */
.custom-dropdown-submenu.open {
    display: block;
}

/* Основні стилі */
.custom-sidebar-menu a {
    color: black;
    font-size: 18px;
    text-decoration: none;
    display: block;
    padding: 4px;
    padding-left: 20px;
}

.custom-sidebar-menu {
    list-style: none;
    padding-left: 0px;
}

.custom-sidebar-menu a:hover {
    color: rgb(0, 0, 0);
    padding: 4px;
}


.search-bar-sidebar {
    margin-left: 10px;
    height: 34px;
}

.form-control-sidebar {
    padding: 2px;
}


/* Сховати бургер-меню та сайдбар на настільних пристроях */
@media (min-width: 769px) {
    .burger-menu,
    .sidebar {
        display: none;
    }
    .search-bar-sidebar {
        display: none;
    }
}

/* Показати бургер-меню та сайдбар на мобільних пристроях */
@media (max-width: 768px) {
    .burger-menu {
        display: block;
    }

    .sidebar {
        display: block;
    }

   .selectionbar {
    height: 55px;
    padding-left: 20px;
    padding-right: 20px;
   }
   .selectionbar-menu{
    display: none;
   }

   
}







        .container-fluid {
    max-width: 100%; /* Встановлює максимальну ширину контейнера */
    width: 97%; /* Ширина контейнера на 100% */
    margin: 0 auto; /* Центрування контейнера */
    padding: 0 15px; /* Внутрішні відступи */
}

.footer {
    background-color: #f8f9fa; /* Колір фону для всього футера */
    padding: 20px 0;
    color: #343a40;
    font-size: 14px;
    padding: 0px;
}

/* Соціальні мережі */
.social-strip {
    display: flex;
    background-color: ##f7f7f7;
    padding: 0;
    padding: 15px 0;
    justify-content: end;
    margin: 0 34;
}

.social-icon {
    margin: 0 5px;
   
}

.social-strip a:hover {
    color: ##f7f7f7;
}

/* Сіра лінія */
.divider {
    border: 0;
    height: 1px;
    background-color: #ccc;
    margin: 0px;
}

/* Контент футера */
.footer-content {
    display: flex;
    justify-content: space-between;
    margin: 0 34px;
    padding-top: 30px;
}

.footer-column {
    width: 30%;
}

.footer-column h4 {
    font-size: 16px;
    margin-bottom: 10px;
    color: #000000;
    font-weight: bold;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    padding: 5px 0;
    font-size: 16px;
}

.footer-column ul li a {
    color: #000000;
    text-decoration: none;
}

.footer-column ul li a:hover {
    text-decoration: underline;
}

.footer-column p{
    color: #000000;
    padding: 5px 0;
    font-size: 16px;
    margin: 0px;
}

.footer-column:first-child {
    text-align: left; /* Ліворуч для "Сторінки" */
}

.footer-column:nth-child(2) {
    text-align: center; /* По центру для "Категорії" */
}

.footer-column:last-child {
    text-align: right; /* Праворуч для "Контакти" */
}
/* Нижня смужка */
.footer-bottom {
    background-color: #000000;
    color: white;
    text-align: center;
    padding: 10px 0;
    font-size: 15px; 
    font-weight: bold;
}
.footer-bottom p{
    margin: 0px;
}

.categories-list {
    display: flex;
    flex-wrap: wrap;
    padding: 0;
    margin: 0;
    list-style:none;
}

.categories-list li{
   width: 50%;
   box-sizing: border-box;
}

.categories-list a{
    text-decoration: none;
    color: inherit;
}
/* Media query для мобільних пристроїв */
@media (max-width: 768px) {

    body{
        background: none;
    }

    .social-strip{
        justify-content: center;
    }

    .footer-content {
        flex-direction: column; /* Стовпчик для мобільних пристроїв */
        align-items: center; /* Центрувати колонки на мобільних пристроях */
    }

    .footer-column {
        width: 100%; /* Задаємо колонкам повну ширину на мобільних пристроях */
        text-align: center; /* Центрувати текст на мобільних пристроях */
    }
    .footer-column:first-child {
        width: 100%; /* Задаємо колонкам повну ширину на мобільних пристроях */
        text-align: center; /* Центрувати текст на мобільних пристроях */
    }

    .footer-column:nth-child(2) {
   display: none;
}

    .footer-column:last-child {
        width: 100%; /* Задаємо колонкам повну ширину на мобільних пристроях */
        text-align: center; /* Центрувати текст на мобільних пристроях */
    }
}

.main-section{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top:30px;
}

.main-content{
    min-height:400px;
    padding: 20px;

}


.card {
    border: none;
    border-radius: 0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    position: relative;
    margin-bottom: 1rem; /* Додати відступ між картками */
    
}

.card:hover {
    transform: scale(1.05); /* Легке збільшення картки при наведенні */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Додаємо тінь при наведенні */
}

.card-body {
    padding: 10px 5px;
    display: flex;
    flex-direction: column;
}

.image-container{
    width: 100%; /* Встановлюємо ширину контейнера */
  padding-top: 100%; /* Встановлюємо висоту контейнера рівною ширині, роблячи його квадратним */
  position: relative; 
    align-items: center; /* Вертикальне вирівнювання по центру */
    justify-content: space-between; /* Вирівнює елементи по краях */
}

.card-img-top {
    position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
    border-radius: 0;
}


.card-price {
    font-size: 16px; /* Зменшити розмір шрифту для мобільних пристроїв */
    font-weight: bold;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.basket-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.basket-icon img {
    width: 100px;
    opacity: 0.5;
}

.card:hover .basket-icon {
    opacity: 1;
    z-index: 997;
}

/* Media query для мобільних пристроїв */
@media (max-width: 768px) {
    .card {
        width: 100%; /* Задаємо карткам ширину 100% */
        margin: 0; /* Прибрати зовнішні відступи */
    }

    .card-title {
        font-size: 14px; /* Зменшити розмір шрифту для мобільних пристроїв */
    }

    .card-price {
        font-size: 14px; /* Зменшити розмір шрифту для мобільних пристроїв */
    }

    .basket-icon img {
        width: 70px; /* Зменшити розмір іконки на мобільних пристроях */
    }
}




.cart-items-container {
    display: flex;
    flex-direction: column;
}

.cart-item {
    display: flex;
    align-items: center;
    background-color: white;
    border: 1px solid #ced4da;
    border-bottom: none;
    overflow: hidden; /* Переконайтеся, що нічого не виходить за межі контейнера */
}

.cart-item:last-child {
    border-bottom: 1px solid #ced4da;
}

.cart-image-container{
    width: 20%; /* Встановлюємо ширину контейнера */
  padding-top: 20%; /* Встановлюємо висоту контейнера рівною ширині, роблячи його квадратним */
  position: relative; 
    align-items: center; /* Вертикальне вирівнювання по центру */
    justify-content: space-between; /* Вирівнює елементи по краях */
}

.cart-item-image img {
    position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
    border-radius: 0;
}

.cart-item-details {
    flex: 1;
    padding-left: 50px;
    overflow: hidden; /* Переконайтеся, що текст не виходить за межі */
}

.cart-item-title {
    font-size: 20px;
    margin: 10px 0;
    white-space: nowrap; /* Забороняє переноси рядка */
    overflow: hidden; /* Приховує переповнений текст */
    text-overflow: ellipsis; /* Додає "..." для довгого тексту */
}

.cart-item-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.cart-item-price,
.cart-item-total {
    font-size: 18px;
}

.quantity-input {
    width: 60px;
    padding: 5px;
    text-align: center;
}

.btn-remove {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 30px;
}

.remove-container {
    margin: 0 25px;
}

@media (max-width: 768px) {
    .cart-item {
        flex-direction: row;
        align-items: flex-start;
    }

    .cart-image-container {
        width: 30%; /* Встановлюємо ширину контейнера */
        padding-top: 30%; /* Встановлюємо висоту контейнера рівною ширині, роблячи його квадратним */
    }

    .cart-item-details {
        padding: 0 5px;
        flex: 1;
        height: 111px;
    }

    .cart-item-title {
        font-size: 16px;
        white-space: nowrap; /* Забороняє переноси рядка */
        overflow: hidden; /* Приховує переповнений текст */
        text-overflow: ellipsis; /* Додає "..." для довгого тексту */
    }

    .cart-item-row {
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }

    .remove-container {
        margin: 0px 5px;
        margin-top: 32px;
    }

    .cart-item-price,
    .cart-item-total {
        font-size: 16px;
    }

    .quantity-input {
        width: 60px;
        height: 24px;
    }

    .main-content {
        min-height:400px;
        padding: 0px;
    }
}




@media (max-width: 768px) {
    .card {
        height: auto;
    }

    .card-title {
        font-size: 16px;
        white-space: normal;
    }

    .card-price {
        font-size: 16px;
        white-space: normal;
    }




    .basket-icon img {
        width: 50px;
        opacity: 0.75;
    }

    .basket-icon {
        opacity: 1; /* Завжди відображати кошик на мобільних пристроях */
    }
}







        .post-show {
    padding: 10px;
    display: flex;
    justify-content: center; /* Горизонтальне вирівнювання */
    align-items: center; /* Вертикальне вирівнювання */
    flex-direction: row; /* Розташування дочірніх елементів вертикально */

}

.post-show-img-container {
    width: 45%; /* Займає всю ширину контейнера */
    padding-top: 45%; /* Встановлюємо висоту рівною ширині, щоб створити квадрат */
    position: relative; /* Позиціонуємо контейнер для коректного відображення зображення */
}

.post-show-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Зображення зберігає пропорції та заповнює весь контейнер */
    border-radius: 0; /* Зберігає прямі кути */
}

.card-title {
    font-size: 16px; /* Зменшити розмір шрифту для мобільних пристроїв */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;


}
.post-show-inf {
    flex: 1;
    padding-left: 20px;
    padding-top: 20px;
    box-sizing: border-box;
    height: 100%;
    word-wrap: break-word; 
    overflow: hidden;
}




.post-show-inf h1 {
    font-size: 26px;

    color: black;
    margin-bottom: 10px;
}

.post-show-inf p {
    font-size: 24px;
    font-weight: bold;
    color: black;
    margin-bottom: 20px;   
}

.post-show-content p{
    font-weight: normal;
    background-color: white;
    font-size: 18px;
    margin: 5px 0;
    text-align: left;
    color: black;   
    word-wrap: break-word; 
    overflow: hidden;
    
}



.post-show-text {
    padding: 10px;
}

.add-to-cart-container {
    margin-top: 20px;
    width: 100%;
}
.add-to-cart-container .btn-success {
    padding: 10px;
    width: 100%;
    font-weight: bold;
    border-radius: 3px;
    background-color: #2B5D52;
}
.add-to-cart-container .btn-success:hover {
    background-color: #1e403a; /* Темніший відтінок зеленого */
}
.add-to-cart {
    font-size: 18px;
    border-radius: 2px;
}

.post-show-text {
    margin-top: 30px;
    color: black;
}


    
        .full-width-section {
    width: 99vw; /* Ширина вікна перегляду */
    margin-left: calc(-50vw + 50%); /* Вирівнювання по центру */
    margin-right: calc(-50vw + 50%); /* Вирівнювання по центру */
    margin-top: 20px;
    background-color: white; /* Білий фон */
    align-items: center; /* Центрування контенту по горизонталі */
    padding-top: 5px;
   
}

.full-width-section .container {
    width: 100%; /* Повна ширина контейнера */
    max-width: 1276px; /* Максимальна ширина контейнера, змініть на свій розсуд */

}



.empty-cart-container {
    display: flex;
    justify-content: center; /* Горизонтальне вирівнювання по центру */
    align-items: center; /* Вертикальне вирівнювання по центру */
    height: 250px;
}

.empty-cart-message {
    text-align: center; /* Вирівнювання тексту по центру всередині повідомлення */
}
.empty-cart-message .btn-success{
    border-radius: 3px;
    width: 100%;
    background-color: #2B5D52;
}
.empty-cart-message .btn-success:hover {
    background-color: #1e403a; /* Темніший відтінок зеленого */
}
        

        @media (max-width: 768px) {

            .add-to-cart {
    padding: 0px;

}
.add-to-cart svg {
    height: 25px;
    width: 25px;
    z-index: 3;
}

.post-cart:active {
    color: rgb(163, 24, 24); /* Колір при натисканні */
}
.post-show {
        flex-direction: column;
        align-items: stretch;
        padding: 10px; 
    }

.post-show-img-container {

    width: 100%; /* Займає всю ширину контейнера */
    padding-top: 100%; /* Встановлюємо висоту рівною ширині, щоб створити квадрат */
    position: relative; /* Позиціонуємо контейнер для коректного відображення зображення */
}

.post-show-img {
    position: absolute;
  
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Зображення зберігає пропорції та заповнює весь контейнер */
    border-radius: 0; /* Зберігає прямі кути */
}


    .post-show-inf {
        padding-left: 0;
        padding-top: 10px;
        min-height: auto;
    }
}

        .navbar-collapse {

    backdrop-filter: blur(10px); 
}

.navbar-nav {
    padding-top: 10px; 
}

.navbar-nav .nav-link {
    color: white !important; 
    padding: 10px 20px;
}

.navbar-nav .nav-link:hover {
    border-radius: 5px;
}

.selectionbar .nav-link {
    color: white !important; 
}





@media (max-width: 768px) {
    .navbar-collapse {
        background-color: rgba(0, 0, 0, 0.5); 
        width: 50px;
        z-index: 9999;
    }

    .navbar-collapse .navbar-nav {
        padding-top: 0;
    }

    .navbar-collapse .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .selectionbar .nav-link {
    color: black !important; 
}
}

.pagination {
    justify-content: right;
}




.search-bar .btn {
    border-radius: 10px;
}

.basket {
    width: 38px;
    height: 38px;
    color: #000; /* Колір іконки, змініть за потреби */
}



.cart-icon-container {
    position: relative; /* Позиціонування батьківського елемента */
    display: inline-flex; /* Для розміщення іконки та тексту */
    align-items: center;
    justify-content: center;
}

.cart-icon {
    position: relative; /* Позиціонування для іконки кошика */
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.cart-badge {
    position: absolute;
    top: -5px; /* Відступ від верхнього краю іконки кошика */
    right: -10px; /* Відступ від правого краю іконки кошика */
    display: flex;
    align-items: center;
    justify-content: center;
}

.bi-circle-fill {
    font-size: 20px; /* Розмір іконки кружечка */
    color: red; /* Колір іконки */
    width: 20px; /* Ширина іконки */
    height: 20px; /* Висота іконки */
    display: flex; /* Центрування внутрішніх елементів */
    align-items: center; /* Вертикальне центрирування */
    justify-content: center; /* Горизонтальне центрирування */
}

.cart-items-count {
    position: absolute;
    color: white; /* Колір тексту */
    font-size: 12px; /* Розмір тексту */
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px; /* Той самий розмір, що і іконка кружечка */
    height: 20px; /* Той самий розмір, що і іконка кружечка */
    top: 50%; /* Центрування по вертикалі відносно іконки кружечка */
    left: 50%; /* Центрування по горизонталі відносно іконки кружечка */
    transform: translate(-50%, -50%); /* Точне центрирування тексту */
}





@media (max-width: 768px) {
    .search-bar .row {
        flex-direction: column;
        align-items: flex-start;
    }

    .search-bar .col-12 {
        width: 100%;
    }

    .search-bar .d-flex {
        width: 100%;
    }

    .search-bar-item {
        height: 42px;
    }

    .search-bar-container{
        margin-bottom: 5px;
    }
    .cart-icon-container {
        display: flex;
        justify-content: flex-end;
        margin-right: 10px;
        margin-top: 10px;
    }

}




.input-group {
    width: 100%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Додає тінь до контейнера */
    border-radius: 0.25rem; /* Трохи закруглені кути для контейнера (опційно) */
}

.search-icon-btn {
    background-color: #fff; /* Білий фон для кнопки лупи */
    border: 1px solid #ced4da; /* Колір бордеру */
    border-right: none; /* Без бордеру справа */
    border-radius: 0; /* Без закруглених кутів */
    padding: 0.375rem 0.75rem; /* Відступи */
    cursor: pointer; /* Курсор у вигляді руки */
}

.search-icon-btn i {
    font-size: 20px; /* Розмір іконки лупи */
    font-weight: 700; /* Товстіша іконка */
}

.search-input {
    border-radius: 0; /* Без закруглених кутів */
    box-shadow: none; /* Прибирає тінь */
    border: 1px solid #ced4da; /* Колір бордеру */
    border-left: none; /* Без бордеру зліва */
}

.search-input:focus {
    box-shadow: none; /* Прибирає тінь при фокусі */
    border-color: #ced4da; /* Колір бордеру при фокусі */
}

.post-cart{
    color: black;
}
.post-cart:hover{
    color:rgb(163,24,24) 
}



@media (max-width: 768px) {
    .pagination{
        display: flex;
        justify-content: center;
}
}
.map-container {
    position: relative; /* Означає, що вміст всередині може використовувати абсолютні позиції */
    padding-top: 0; /* Зниження відступу зверху */
    height: 400px; /* Задати фіксовану висоту для контейнера */
}

iframe {
    position: absolute; /* Абсолютна позиція для заповнення контейнера */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


.contact-container{
    display: flex;
    justify-content: space-between;
}

.contact-info{
    font-size: 17px;
    color: black;
}

.contact-info:last-child{
    text-align: end;
}

@media (max-width: 768px) {
  .contact-container {
    flex-direction: column; /* Змінюємо напрямок колонок на вертикальний */
    
  }
  .contact-info{
    font-size: 15px;
}
  .contact-info:last-child{
    text-align: start;
}
}

.new-form-control {
    border-radius: 0; /* Без закруглених кутів */
    box-shadow: none; /* Прибирає тінь */
    border: 1px solid #ced4da; /* Колір бордеру */
}

.new-form-control:focus {
    box-shadow: none; /* Прибирає тінь при фокусі */
    border: 2px solid #85bdf5;
}

.user-items-container {
    display: flex;
    flex-direction: column;
}

.user-item {
    display: flex;
    align-items: center;
    background-color: white;
    border: 1px solid #ced4da;
    border-bottom: none;
    overflow: hidden; /* Переконайтеся, що нічого не виходить за межі контейнера */
}

.user-item:last-child {
    border-bottom: 1px solid #ced4da;
}

.user-image-container{
    width: 15%; /* Встановлюємо ширину контейнера */
  padding-top: 15%; /* Встановлюємо висоту контейнера рівною ширині, роблячи його квадратним */
  position: relative; 
    align-items: center; /* Вертикальне вирівнювання по центру */
    justify-content: space-between; /* Вирівнює елементи по краях */
}

.user-item-image img {
    position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
    border-radius: 0;
}

.user-item-title {
    font-size: 20px;
    margin: 10px 0;
    white-space: nowrap; /* Забороняє переноси рядка */
    overflow: hidden; /* Приховує переповнений текст */
    text-overflow: ellipsis; /* Додає "..." для довгого тексту */
}

.user-item-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    
}

.user-item-price {
    font-size: 18px;
}

.user-item-details {
        padding: 0 5px;
        flex: 1;
        overflow: hidden;
    }

@media (max-width: 768px) {
    .user-item {
        flex-direction: row;
        align-items: flex-start;
    }

    .user-image-container {
        width: 30%; /* Встановлюємо ширину контейнера */
        padding-top: 30%; /* Встановлюємо висоту контейнера рівною ширині, роблячи його квадратним */
    }

    .user-item-details {
        padding: 0 5px;
        flex: 1;
        height: 111px;
        overflow: hidden;
    }

    .user-item-title {
        font-size: 16px;
        white-space: nowrap; /* Забороняє переноси рядка */
        overflow: hidden; /* Приховує переповнений текст */
        text-overflow: ellipsis; /* Додає "..." для довгого тексту */
    }

    .user-item-row {
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }

    .user-item-price {
        font-size: 16px;
    }


}



.post-images-sidebar {
    width: 9%; /* Ширина колонки для зображень */
    display: flex; /* Використовуємо Flexbox для вирівнювання */
    flex-direction: column; /* Розміщення елементів вертикально */

    margin-top: 0; /* Відсутність відступу зверху */
    
}


.small-image-container {
    display: flex; /* Використовуємо Flexbox для розміщення зображень */
    flex-wrap: wrap; /* Дозволяє зображенням переноситися на новий рядок */
    gap: 9px; /* Відстань між зображеннями */
    width: 92%; /* Ширина контейнера */
}



.small-image-wrapper {
    width: 100%; /* Ширина контейнера для зображення */
    padding-top: 100%; /* Висота контейнера дорівнює його ширині, роблячи його квадратним */
    position: relative; /* Контейнер для позиціонування зображення всередині */
    overflow: hidden; /* Сховати частини зображення, що виходять за межі контейнера */

}
.small-image-wrapper:hover {
transform: scale(1.05); /* Легке збільшення картки при наведенні */
box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);}

.small-image {
    cursor: pointer;
    position: absolute; /* Позиціонує зображення всередині контейнера */
    top: 0;
    left: 0;
    width: 100%; /* Розтягує зображення по ширині контейнера */
    height: 100%; /* Розтягує зображення по висоті контейнера */
    object-fit: cover; /* Заповнює контейнер, зберігаючи співвідношення сторін */
    
}

.small-image:hover {
    transform: scale(1.1); /* Збільшує зображення на 10% */
    filter: brightness(95%); /* Зменшує яскравість зображення на 20% */
    transition: 0.3 ease-in-out;
    transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
}

.post-show-img-container {
    position: relative; /* Додаємо відносне позиціонування для батьківського контейнера */
    overflow: hidden; /* Сховати частину зображення, що виходить за межі контейнера */
}

.post-show-img {
    width: 100%; /* Зображення розтягується на всю ширину контейнера */
    transition: transform 0.5s ease-in-out; /* Плавна анімація переходу */
    position: absolute; /* Абсолютне позиціонування для слайдінгу */
    top: 0;
    left: 0;
}

.carousel-container {
    position: relative;
    overflow: hidden; /* Сховати зображення, яке виходить за межі контейнера */
    width: 100%;
    height: 400px; /* Встановіть висоту відповідно до ваших потреб */
}

.carousel-wrapper {
    display: flex;
    transition: transform 0.5s ease-in-out; /* Плавний перехід при змінах */
}

.carousel-image {
    min-width: 100%; /* Зображення займає всю ширину контейнера */
    transition: opacity 0.5s ease-in-out; /* Плавна зміна прозорості при переході */
}

.arrow-left, .arrow-right {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem; /* Початковий розмір */
    cursor: pointer;
    opacity: 0.5;
    z-index: 10;
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out; /* Плавний перехід */
}

.arrow-left:hover, .arrow-right:hover {
   
    transform: scale(1.2) translateY(-50%); /* Збільшує розмір на 10% без зміщення */
    opacity: 0.8; /* Робить стрілки повністю видимими при наведенні */
}

.arrow-left {
    left: 10px;
}

.arrow-right {
    right: 10px;
}


@media (max-width: 768px) {
    .post-images-sidebar {
    display: none;
}
     }

     

    </style>

    
</head>
<body>


<div>
    @include('includes.alert')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
