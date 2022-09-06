'use strict';

var menuToggle = document.querySelector('.menu-toggle')
var navigation = document.querySelector('.navigation')
var listItems = document.querySelectorAll('.list-item')
var url = window.location.pathname.replace('/Management-System/', '')

menuToggle.onclick = () => {
  navigation.classList.toggle('open')
}

function removeActive(index) {
  for(var int = 0; int < listItems.length; int++) {
    listItems[int].classList.remove('active')
  }
  addActive(index)
}

function addActive(index) {
  listItems[index].classList.add('active')
}

switch(url){
  case 'index.php':
    removeActive(0)
    break
  case 'functionary.php':
    removeActive(1)
    break
  case 'mobile.php':
    removeActive(2)
    break
  case 'tablet.php':
    removeActive(3)
    break
  case 'desktop.php':
    removeActive(4)
    break
  case 'user.php':
    removeActive(5)
    break
}
