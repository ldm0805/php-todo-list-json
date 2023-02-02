<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-9">
                    <h2 class="text-center my-5">To-Do-List</h2>
                    <ul class="list-unstyled list-group text-center">
                        <li class="p-2 list-group-item animate__animated animate__bounceIn animate__delay-0.5s" v-for="(todo, index) in todoList">
                            <div class="d-flex justify-content-between align-items-center">
                                <div v-if="clicked != index">
                                    {{todo.language}}
                                </div>
                                <div v-else>
                                    <div class="row">
                                        <div class="d-flex">
                                            <input type="text" v-model="todo.language" placeholder="Modifica Lista" class="form-control">
                                            <button class="btn btn-primary" @click="confirmUpdate(todo.language, index)">xx</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-square btn-warning m-1" @click="editTodo(index)"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger m-1" @click="deleteTodo(index)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="col-12 mt-5 d-flex">
                        <input type="text" v-model="language" placeholder="Elemento Lista" class="form-control" @keyup.enter="addToDoItem">
                        <button class="btn btn-light col-2" @click="addToDoItem">Inserisci elemento</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>