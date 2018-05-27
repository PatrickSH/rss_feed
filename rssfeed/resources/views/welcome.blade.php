<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>
        <div class="loader"></div>

        <div id='app'>
            <div class="get-started">
                <label>Enter your email below and create your feed!</label>
                <form method="post" action="/user/save" v-on:submit.prevent="saveUser">
                    <input type="email" v-model="userEmail" name="email" class="user-email" placeholder="E-mail"/>
                </form>
            </div>
            <?php /*<h2 class="feed-name">Hej</h2>
            <article class="post" data-link="d">
                <h2>Test</h2>
                <div class="content">
                    <p>Hej med dig</p>
                    <div class="tags">
                        <p class="tag">Hej</p>
                    </div>
                </div>
            </article>*/ ?>
        </div>
    </body>
</html>
