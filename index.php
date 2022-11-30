<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDoList JSON</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <div class="container">
                <h1>PHP ToDoList JSON</h1>
                <div class="row">
                    <div class="col-8">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between" :class="{'text-decoration-line-through': todo.done}" v-for="(todo, index) in todoList">
                                <span @click="toggleTextDone(index)">
                                    {{ todo.text }}
                                </span>
                                <i class="fa-solid fa-trash-can" @click="deleteTask(index)"></i>
                            </li>
                            <!-- <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li> -->
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 d-flex mt-3">
                        <input class="form-control" type="text" placeholder="Scrivi nuovo todo.." aria-label="Inserisci un nuovo todo" v-model="newTodo">
                        <button class="btn btn-primary" @click="addTodo">Aggiungi</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>
</html>