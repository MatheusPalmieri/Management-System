'use strict';

var resetURL = window.location.href.replace('http://localhost/php/User-Management/', '')
var resetButton = document.getElementById('reset')
var search = document.getElementById('search')

if(resetURL === 'functionary.php' || resetURL === 'functionary.php?search=' + search.value){
    if(resetURL !== 'functionary.php' || resetURL === 'functionary.php?search='){
        resetSearch()
    }
} else if (resetURL !== 'user.php' || resetURL === 'user.php?search=') {
    resetSearch()
} else {
        resetButton.style = 'display: none;'
}

search.addEventListener("keydown", (event) => {
    if(event.key === "Enter") {
        searchData()
    }
})

function searchData() {
    if(window.location = 'functionary.php') {
        window.location = 'functionary.php?search=' + search.value
    } else {
        window.location = 'user.php?search=' + search.value
    }
}

function resetSearch() {
    resetButton.style = 'display: flex;'
}

function searchClearData() {
    console.log(window.location)
    if(window.location = 'functionary.php?search=') {
        window.location = 'functionary.php'
    } else {
        window.location = 'user.php'
    }
    // window.location = 'functionary.php'
    // window.location = 'user.php'
}
