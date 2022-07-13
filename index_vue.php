<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="styleVue.css">

    <title>Albums con VUE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

</head>

<body>
    <div id="app">
        <div class="bg-dark p-5">
            <div class="container  flex-grow-1">
                <div class="pt-5 pb-2 px-1">
                    <div class="row row-cols-2 row-cols-md-5">
                        <div class="col mb-3">
                            <div v-for="album in albumsList" class="card text-center">
                                <img class="card-img-top img-poster" :src="album.poster" :alt="album.title">
                                <div class="card-body">
                                    <h5 class="card-title">{{album.title}}</h5>
                                    <div class="text-muted">
                                        <h6>{{album.author}}</h6>
                                    </div>
                                    <div class="text-muted">
                                        <span class="fs-6">{{album.year}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/vue.js"></script>
</body>

</html>