<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Albums con VUE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

</head>

<body>
    <div id="app">

        <div class="container">
            <?php var_dump($albumsList); ?>
            <h1>{{ }}</h1>

            <ul id="productsContainer">
                <li v-for="album in albumsList">
                    {{ }}
                </li>
            </ul>
        </div>

    </div>

    <script src="js/vue.js"></script>
</body>

</html>