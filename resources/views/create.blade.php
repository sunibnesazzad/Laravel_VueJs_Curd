<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<div id="vue-crud-wrapper">

    <p class="text-center alert alert-danger"
       v-bind:class="{ hidden: hasError }">Please fill all fields!</p>

    <form action="/action_page.php">
        {{  }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"
                   required v-model="newItem.name" placeholder=" Enter some name">
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

    <hr>

    <div class="table table-borderless" id="table">
        <table class="table table-borderless" id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Profession</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tr v-for="item in items">
                <td>@{{ item.id }}</td>
                <td>@{{ item.name }}</td>
                <td>@{{ item.age }}</td>
                <td>@{{ item.profession }}</td>

                <td id="show-modal" @click="showModal=true; setVal(item.id, item.name, item.age, item.profession)"  class="btn btn-info" ><span
                            class="glyphicon glyphicon-pencil"></span></td>
                <td @click.prevent="deleteItem(item)" class="btn btn-danger"><span
                            class="glyphicon glyphicon-trash"></span></td>
            </tr>
        </table>
    </div>

</div>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>