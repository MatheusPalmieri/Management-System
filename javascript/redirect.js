'use strict';

var redirect = document.querySelectorAll('.list-item > a')
    redirect[0].addEventListener('click', () => {window.location = 'painel.php'})
    redirect[1].addEventListener('click', () => {window.location = 'functionary.php'})
    redirect[2].addEventListener('click', () => {window.location = 'desktop.php'})
    redirect[3].addEventListener('click', () => {window.location = 'user.php'})
    redirect[4].addEventListener('click', () => {window.location = 'settings.php'})
    // p[5].addEventListener('click', () => {window.location = 'logout.php'})