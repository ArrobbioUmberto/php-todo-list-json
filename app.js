const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'To Do List',
            // qui aggiungo nei data il mio todo, che inizialmente e' vuoto ma poi gli pusho i file della chimata axios 
            todos: [],
            newTodo: '',
            completeTasks: [
                {
                    text: '',
                    done: true,
                }
            ]
        }
    },
    methods: {
        // qui creo una funzione per andarmi a prendere i file tramite una chimata axios al mio API/server.php
        searchItems() {
            axios.get('./todo.php').then(res => {
                console.log(res.data)
                this.todos = res.data
            })
                .catch((err) => {
                    console.log(err)
                    this.todos = []
                })
        },
        addItem() {
            console.log('save task', this.newTodo)
            $data = {
                todo: this.newTodo,
            }
            axios.post('./todo.php', $data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(res => {
                this.todos = res.data;
                this.newTodo = ''
            })
        }
    },
    mounted() {
        // faccio questa chiamata appena viene montata la mia pagina perche' voglio recuperare i dati dal mio server tutte le volte che aggiorno la pagina 
        this.searchItems()
    }
}).mount('#app')
