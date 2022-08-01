'use strict';

var menuToggle = document.querySelector('.menu-toggle')
var navigation = document.querySelector('.navigation')
var listItems = document.querySelectorAll('.list-item')
var listLinks = document.querySelectorAll('.list-item a')
var url = window.location.href.replace('http://localhost/development/User-Management/', '')

menuToggle.onclick = () => {
  navigation.classList.toggle('open')
}

function removeActive() {
  for(var int = 0; int < listItems.length; int++) {
    listItems[int].classList.remove('active')
  }
}

switch(url){
  case 'dashboard.php':
    removeActive
    listItems[0].classList.add('active')
    break

  case 'user.php':
    removeActive
    listItems[2].classList.add('active')
    break
  default:
    removeActive
    listItems[1].classList.add('active')
}
