<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div id="vue-crud-wrapper">
            <p v-bind:class="{ hidden: hasError }">Please fill  fields!</p>

            <form action="">

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                            v-model="newItem.name" placeholder=" Enter some name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="age"
                           required v-model="newItem.age" placeholder=" Enter your age">
                </div>
                <div class="form-group">
                    <label for="profession">Profession:</label>
                    <input type="text" class="form-control" id="profession" name="profession"
                           required v-model="newItem.profession" placeholder=" Enter your profession">
                </div>

                <button class="btn btn-primary" @click.prevent="createItem()" id="name" name="name">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>
            </form>

            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tr v-for="item in items">
                    <td>@{{  item.id }}</td>
                    <td>@{{  item.name }}</td>
                    <td>@{{  item.age }}</td>
                    <td>@{{  item.profession }}</td>
                </tr>
            </table>

        </div>

    <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
