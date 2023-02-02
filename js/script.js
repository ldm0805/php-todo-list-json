const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            language: ''
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;

        });
    },
    //Funzione per aggiungere elementi nella lista
    methods: {
        addToDoItem() {
            const data = {
                todoItem: this.language
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.language = '';
                this.todoList = response.data;
            })
        },
        deleteTodo(index) {
            const data = {
                element: index
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todoList = response.data;
            })

        }
    },
}).mount('#app');