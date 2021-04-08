<?php
session_start();
if (!isset($_COOKIE['name'])) {
    session_destroy();
    header('Location: login.php');
}
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/myProfile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/ENUMS.js"></script>
    <script src="../js/profile.js"></script>
    <title>Profile</title>
</head>

<body>
    <div class="wrapper">
        <div class="back">Back</div>
        <div class="box">
            <div class="myInfo">
                <div class="name"><?= $_COOKIE["name"] ?></div>
                <div class="phone">
                    <div>phone: </div>
                    <div>[89273695067]</div>
                </div>
                <div class="email">
                    <div>email: </div>
                    <div>[asddas@gmail.com]</div>
                </div>
                <div class="login">
                    <div>login: </div>
                    <div>[Vasya_Pupkin]</div>
                </div>
            </div>
            <div class="myOrders">
                <div class="name">Заказы</div>
                <div class="table">
                    <table>
                        <tr>
                            <th>Книга</th>
                            <th>Количество</th>
                            <th>Доставка</th>
                            <th>Город</th>
                            <th>Улица</th>
                            <th>Дом</th>
                            <th>Квартира</th>
                            <th>Время заказа</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>