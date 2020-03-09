## Електронен магазин

Практическият пример към задачата представлява умален модел на електронен магазин. Всички продукти са свободни за разглеждане дори от потребители, които не са влезли в системата. Поръчки, покупки и управление на потребителската пазарска количка могат да правят само потребители с ограничен достъп (регистрирани и влезли в своя профил). Потребителят Администратор има право да добавя, изтрива и променя продуктите в магазина.


За инсталацията:

* препоръчително е използването на пакетен мениджър composer. Ако такъв не е наличен във вашата система, в основната директория има файл - composer.phar - предназначен за заместител на глобално инсталирания composer.

* При липса на глобално инсталиран composer, всички команди, споменати по-долу, съдържащи composer, трябва да бъдат изпълнявани с `php composer.phar` вместо `composer`. Пример: `composer install` става `php composer.phar install`

* Да се създаде предварително база данни с колация `utf8mb4`

1. През команден ред влезте в основната директория на проекта.
2. Изпълнете `composer install`.
3. След като инсталацията завърши, изпълнете `php artisan key:generate`. Тази команда генерира случаен секретен ключ, използван в приложението и го записва във файла .env. Ако такъв файл не съществува - бива създаден.
4. Отворете .env файла в текстов редактор по избор и променете следните параметри:

    DB_CONNECTION=mysql 
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=[Име на използваната база данни]
    DB_USERNAME=[Потребител на базата данни]
    DB_PASSWORD=[Парола за достъп на потребителя]

5. Запишете промените в .env. и изпълнете в командния ред `php artisan migrate:fresh --seed`

6. Ако не разполагате с инсталиран web-сървър, изпълнете `php artisan serve`, което ще стартира своеобразен сървър на адрес `http://localhost:8000` ако порт 8000 е свободен. Ако ли не - 8001 или първият номер на порт >8000, който е свободен.

7. Заредете в web-браузър http://localhost:8000
