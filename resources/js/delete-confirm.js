// per creare un alert di conferma della cancellazione dell'elemento, devo prima salvarlo in una costante
const deleteForms = document.querySelectorAll('form.animal-form-delete')

//per iterare su tutti i form delete devo creare una forEach
deleteForms.forEach((deleteFormELement) => {
    //aggiungo un ascoltatore di eventi per intercettare l'azione
    deleteFormELement.addEventListener('submit', function(event){
        //blocco la propagazione dell'evento
        event.preventDefault();

        //realizzo un if che in base alla condizione richiami o meno l'evento bloccato
        if(window.confirm('Do you really want to delete this animal?') === true){
            this.submit();
        }

    })
})
