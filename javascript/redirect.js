'use strict';

const openPage = (index, target) => {
    var url = './../inventory.com/' + index + '.php'
    var xml = new XMLHttpRequest()

    xml.onreadystatechange = () => {
        if(xml.readyState == 4 && xml.status == 200) document.getElementById(target).innerHTML = xml.responseText
    }

    xml.open('GET', url)
    xml.send()
}