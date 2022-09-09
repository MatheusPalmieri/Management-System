'use strict';

var resetURL = window.location.pathname.replace('/Management-System/', '')
var resetButton = document.getElementById('reset')
var search = document.getElementById('search')

// console.log(resetURL)

if(resetURL === 'functionary.php' || resetURL === 'functionary.php?search=' + search.value){
    if(resetURL !== 'functionary.php' || resetURL === 'functionary.php?search='){
        resetSearch()
        console.log('hit1')
    }
    console.log('hit2')
} else if (resetURL === 'user.php' || resetURL === 'user.php?search=') {
    resetSearch()
    console.log('hit3')
} else if (resetURL === 'mobile.php' || resetURL === 'mobile.php?search=') {
    resetSearch()
    console.log('hit4')
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
    } else if (window.location = 'user.php') {
        window.location = 'user.php?search=' + search.value
    } else {
        window.location = 'mobile.php?search=' + search.value
    }
}

function resetSearch() {
    resetButton.style.display = 'none'
}

function searchClearData() {
    if(window.location = 'functionary.php?search=') {
        window.location = 'functionary.php'
    } else if (window.location = 'user.php?search=') {
        window.location = 'user.php'
    } else {
        window.location = 'mobile.php'
    }
    // window.location = 'functionary.php'
    // window.location = 'user.php'
}

function confirmDelete() {
    if(!confirm('Deseja excluir?'))document.getElementById('confirmDelete').href = ''
}
