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
    },
    changeState(arrayIndex) {
        const newState = this.toDoList[arrayIndex].state == 'done' ? 'undone':'done';
        this.toDoList[arrayIndex].state = newState 
        const data = {
            updateTask: newState,
            listIndex: arrayIndex
        }
        axios.post('server.php', data, 
        {
            headers: {'Content-Type': 'multipart/form-data'}
        });
    }
    },
    mounted() {
        this.getList();
    }
}).mount('#app')