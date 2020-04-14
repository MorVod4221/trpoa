#!/bin/bash
#Получение имени ветки
vers = $(git symbolic-ref --short -q HEAD>version)
#Установка зависимостей композера
$(composer install)