<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>To-Do-List</title>
</head>
<body class="bg-success-subtle">

    <div id="app">
        <main class="my-5 container">
            <h1 class="text-primary text-center">To-Do-List</h1>
            <div class="w-75 m-auto border border-black p-3 bg-light rounded-3">
                <ul class="list-group list-unstyled mb-4">
                    <li v-if="toDoList.length == 0" class="list-group-item text-success text-center">Non ci sono altri impegni in programma</li>
                    <li v-else v-for="task in toDoList" class="list-group-item"> {{ task }} </li>
                </ul>
                <div class="d-flex justify-content-center pt-3 border-top border-dark-subtle">
                    <input class="me-3" type="text">
                    <button class="btn btn-primary btn-sm">Aggiungi</button>
                </div>
            </div>
            
        </main> 
    </div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./main.js"></script>
</body>
</html>