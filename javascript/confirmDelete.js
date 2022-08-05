function confirmDelete() {
    if(!(confirm('Deseja excluir?'))){
        document.getElementById('confirmDelete').href = ''
    }
}