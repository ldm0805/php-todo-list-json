<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-6">
                    <h2 class="text-center my-5">To-Do-List</h2>
                    <ul class="list-unstyled list-group text-center">
                        <li class="p-2 list-group-item" v-for="todo in todoList">
                            {{todo.language}}
                        </li>
                    </ul>
                    <div class="col-12 mt-5 d-flex">
                        <input type="text" v-model="language" placeholder="Elemento Lista" class="form-control">
                        <button class="btn btn-primary col-2" @click="addToDoItem">Inserisci elemento</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>