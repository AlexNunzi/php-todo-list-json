const { createApp } = Vue

createApp({
    data() {
    return {
        toDoList: [],
        addTask: ''
    }
    },
    methods: {
    getList() {
        axios.get('server.php')
        .then(response => {
            this.toDoList = response.data;
        })
    },
    postNewTask() {
        if(this.addTask.trim() != ''){
            const data = {
                newTask: this.addTask
            };
    
            axios.post('server.php', data, 
            {
                headers: {'Content-Type': 'multipart/form-data'}
            })
            .then(response => {
                this.toDoList = response.data;
                this.addTask = '';
            });
        }
    }
    },
    mounted() {
        this.getList();
    }
}).mount('#app')