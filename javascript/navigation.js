'use strict';

var menuToggle = document.querySelector('.menu-toggle')
var navigation = document.querySelector('.navigation')
var listItems = document.querySelectorAll('.list-item')
var url = window.location.pathname.toLowerCase().replace('/inventory.com/', '')

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
  case 'inventory.php':
    removeActive(1)
    break
  case 'inventoryregister.php':
    removeActive(1)
    break
  case 'inventoryedit.php':
    removeActive(1)
    break
  case 'user.php':
    removeActive(2)
    break
  default:
    console.log('error')
    console.error()
}
