'use strict';

var url = window.location.pathname.replace('/inventory.com/', '')
var resetButton = document.getElementById('reset')
var search = document.getElementById('search')

if(url === 'inventory.php?search=' + search.value){
    console.log('search inv')
    resetSearch()
} else if (url == 'user.php?search= ' + search.value) {
    resetSearch()
    console.log('search user' + search.value)
} else {
    console.log('saiu')
    resetButton.style = 'display: none;'
}

// if(url === 'inventory.php' || url === 'inventory.php?search=' + search.value){
//     if(url !== 'inventory.php' || url === 'inventory.php?search='){
//         resetSearch()
//     }
// } else if (url !== 'user.php' || url === 'user.php?search=') {
//     resetSearch()
// }

search.addEventListener("keydown", (event) => {
    if(event.key === "Enter") {
        searchData()
    }
})

function searchData() {
    if(window.location = 'inventory.php') {
        window.location = 'inventory.php?search=' + search.value
    } else {
        window.location = 'user.php?search=' + search.value
    }
}

function resetSearch() {
    console.log('reset')
    resetButton.style.display = 'block'
}

function searchClearData() {
    if(window.location = 'inventory.php?search=') {
        window.location = 'inventory.php'
    } else {
        window.location = 'user.php'
    }
    // window.location = 'inventory.php'
    // window.location = 'user.php'
}

function confirmDelete() {
    if(!confirm('Deseja excluir?'))document.getElementById('confirmDelete').href = ''
}
