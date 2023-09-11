<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>php-dischi-json</title>
</head>
<body>

    <div id="app">

        <main class="bg-warning">

            <div class="container">

                <div class="row row-cols-3 g-4">

                    <div class="col" v-for="(disc, i) in discs">

                    <div class="card h-100 text-center">
                        <img :src="`./images/${disc.image}`" class="card-img-top" :alt="`${disc.image}`">
                        <div class="card-body">
                            <h3 class="card-text"> {{ disc.title }} </h3>
                            <h5 class="card-text"> {{ disc.author }} </h5>
                            <h6 class="card-text"> {{ disc.year }} </h6>
                        </div>
                    </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./scripts/main.js"></script>
</body>
</html>