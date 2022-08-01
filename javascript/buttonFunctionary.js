'use strict';

var resetURL = window.location.href.replace('http://localhost/development/User-Management/', '')
var resetButton = document.getElementById('reset')
var search = document.getElementById('search')

search.addEventListener("keydown", (event) => {
    if(event.key === "Enter") {
        searchData()
    }
})

function searchData() {
    window.location = 'functionary.php?search=' + search.value
}

console.log(resetURL)

if(resetURL !== 'functionary.php' && resetURL !== 'functionary.php?search=') {
    resetButton.style = 'display: flex;';
}

function searchClearData() {
    window.location = 'functionary.php'
}
