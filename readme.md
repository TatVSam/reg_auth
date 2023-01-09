# Авторизация и регистрация
Практическое задание на курсе Skillfactory &ndash; PHPDEV, задание 27.6.

## Содержание работы

Приложение зарегистрировано в *VK* по адресу *http://localhost/reg_auth/*. Следует назвать папку проекта *reg_auth*, положить в папку *localhost*
и запускать по данному адресу.

* Создана система регистрации, которая позволяет регистрироваться при помощи пары логин-пароль.

* Создана страница авторизации, на которой пользователь может ввести заранее созданные логин и пароль.

* Сделана возможность авторизации через *VK*. Страница авторизации создана с *CSRF*-токеном.

* В сессии сохраняется роль пользователя — обычный и пользователь *VK*.

* На страницу *show.php* нельзя попасть, пока пользователь не авторизован. На этой странице отображается один абзац текста и одна картинка. Текст виден всем авторизованным пользователям, картинка — только пользователям *VK*.

* С помощью библиотеки *Monolog* реализована система хранения логов, которая записывает неудачные попытки авторизации через логин и пароль.

* Добавлен скриншот установки утилиты *Composer*.


## Используемые технологии

* HTML

* CSS, Bootstrap

* PHP

---
## Как открыть/запустить

Запустить на локальном сервере. Папку проекта назвать *reg_auth*, положить в папку *localhost* и запускать по адресу *http://localhost/reg_auth*).