// per creare un alert di conferma della cancellazione dell'elemento, devo prima salvarlo in una costante
const deleteForms = document.querySelectorAll('form.animal-form-delete')

//per iterare su tutti i form delete devo creare una forEach
deleteForms.forEach((deleteFormELement) => {
    //aggiungo un ascoltatore di eventi per intercettare l'azione
    deleteFormELement.addEventListener('submit', function(event){
        //blocco la propagazione dell'evento
        event.preventDefault();

        //creo una constante per salvare l'attributo con il nome dell'animale da passare al window confirm
        const animalName = this.getAttribute('data-animal-name');
        console.log(animalName)
        //realizzo un if che in base alla condizione richiami o meno l'evento bloccato
        if(window.confirm(`Do you really want to delete ${animalName}?`) === true){
            this.submit();
        }

    })
})
