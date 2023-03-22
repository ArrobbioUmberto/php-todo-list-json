

const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            // qui aggiungo nei data il mio todo, che inizialmente e' vuoto ma poi gli pusho i file della chimata axios 
            todos: [],
        }
    },
    methods: {
        // qui creo una funzione per andarmi a prendere i file tramite una chimata axios al mio API/server.php
        searchItems() {
            axios.get('./todo.php').then(res => {
                console.log(res.data, res.data[0])
                this.todos = res.data
            })
                .catch((err) => {
                    console.log(err)
                    this.todos = []
                })
        },
    },
    mounted() {
        // faccio questa chiamata appena viene montata la mia pagina perche' voglio recuperare i dati dal mio server tutte le volte che aggiorno la pagina 
        this.searchItems()
    }
}).mount('#app')
