# User-Manager
CRUD-приложение на PHP

Простое приложение для управления данными пользователей.

Возможности:
- Просмотр списка пользователей
- Добавление новой записи
- Редактирование существующей записи
- Мягкое удаление через флаг `flag = 1`
- Валидация: нет 
- Адаптивная верстка на Bootstrap 5

Стек:
- Backend (PHP 8.0.14, PDO)
- База данных (MySQL)
- Frontend (HTML5, CSS3, Bootstrap 5, Font Awesome)

Файлы
`index.php` - главная страница с таблицей
`foo.php` - обработка форм
`connect.php` - подключение к БД

_______________________________

Запуск
1. Создайте базу данных `users_data`:
```sql
CREATE DATABASE users_data
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;
```

2. Создайте таблицу `users`:
```sql
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255),
    user_email VARCHAR(255),
    flag INT DEFAULT 0
);
```

3. При необходимости укажите свои данные в `connect.php`

4. Откройте `index.php` в браузере

_______________________________

Автор

- Екатерина Шингирей
- Email: ekaterinasingirej393@gmail.com
- Telegram: @katyshi06
