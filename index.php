<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>TO DO LIST</title>
</head>

<body>

    <div id="app">
        <div class="container py-5">
            <h1>{{ message }}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <input @keyup.enter="addItem" v-model="newTodo" type="text" placeholder="Scrivi nella lista " class="mb-3 form-control" name="todo" aria-label="default input example">
                    <ul class="list-group">
                        <li v-for="(item,index) in todos" :key="item" class="list-group-item">{{item}}</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <script src="./app.js"></script>
</body>

</html>