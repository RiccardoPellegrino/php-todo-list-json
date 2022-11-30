<php?>

    <!DOCTYPE html>
    <html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
            integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
            crossorigin='anonymous' referrerpolicy='no-referrer' />
        <link rel="stylesheet" href="./css/style.css">
        <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
        <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
        <script src="./js/script.js" defer></script>

        <title>Php ToDo List</title>
    </head>

    <body>
    <div id="app">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center form-container">
                <h1 class="text-white-50">Todo List</h1>
                <div class="form">
                    <ul class="d-flex flex-column">
                        <li v-for="(item, index) in list" class="todo" :class="item.done ? 'done' : ''">
                        {{ index }} {{ item.text }} 
                            <span class="icon float-end" @click="cancellaElemento(index)">
                                <i class="fa-solid fa-trash float-end bg-danger"></i>
                            </span>
                        </li>
                    </ul>
                <div>
                    <input type="text" v-model="newTask" placeholder="Aggiungi da fare..." name="newTask" @keyup.enter='send()'>
                    <button class="button" @click='send()'>Aggiungi</button>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>