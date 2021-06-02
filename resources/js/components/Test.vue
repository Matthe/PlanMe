<template>
    <div class="toDoListContainer">
        <div class="heading">
            <h2 id="title">ToDo list</h2>
            <add-item-form />
        </div>
        <list-view />
    </div>
</template>

<script>
import AddItemForm from "./AddItemForm"
import ListView from "./ListView";

export default {
    components: {
        AddItemForm,
        ListView
    }
}
</script>

<style scoped>
.toDoListContainer{
    width: 350px;
    margin: auto;
}

.heading{
    background: #e6e6e6;
    padding: 10px;
}

#title{
    text-align: center;
}
</style>
