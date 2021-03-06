<?php

//###############################################################
//  Настройка формы с вложением
//###############################################################

// установлен максимальный общий размер файлов 5Мбайт (5*1024*1024=5242880)
const MAX_FILES_SIZE = 5242880;

// разрешённые расширения файлов
$allowedExtensions = array('doc', 'pdf');

// Общее количество загружаемых файлов
const COUNT_FILES = 1;



//###############################################################
//  Отправка письма администратору
//###############################################################

// email администратора
// пример: 'manager@mail.ru'
const MAIL_ADDRESS = 'info@eurojob.site';

// добавить еще один email администратора
// пример: 'manager@mail.ru'
const MAIL_ADDRESS_TWO = '';

// от какого email будет отправляться письмо администратору
// пример: 'no-reply@mydomain.ru'
const MAIL_FROM = 'info@eurojob.site';



//###############################################################
//  Отправка сообщения посетителю сайта
//###############################################################

// разрешить отправку сообщения посетителю
// чтобы отправлять поменяйте на true
const MAIL_CLIENT = true;

// тема письма для посетителя
const SUBJECT_MAIL_CLIENT = 'Your mail has been received';

// от какого email будет отправляться письмо посетителю
// пример: 'no-reply@mydomain.ru'
const MAIL_FROM_CLIENT = 'info@eurojob.site';



//###############################################################
//  Настройки SMTP
//###############################################################

// включаем отправку SMTP
// Чтобы включить поменяйте на true
const SMTP_ON = true;

// SMTP сервер
// пример: 'smtp.mail.ru'
const SMTP_SERVER = 'smtp.hostinger.com';

// ваша почта
// пример: 'username@mail.ru'
const USER_NAME = 'info@eurojob.site';

// пароль от почты
const PASSWORD = 'Aa1234567';

// протокол шифрования
// пример: 'ssl'
const SMTP_SECURE = 'ssl';

// SMTP порт
const SMTP_PORT = 587;