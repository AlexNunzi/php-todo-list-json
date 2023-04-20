const { createApp } = Vue

createApp({
    data() {
    return {
        toDoList: [],
    }
    },
    methods: {
    getList() {
        axios.get('server.php')
        .then(response => {
            this.toDoList = response.data;
        })
    }
    },
    mounted() {
        this.getList();
    }
}).mount('#app')