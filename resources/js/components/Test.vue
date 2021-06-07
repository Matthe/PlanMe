<template>
    <div class="toDoListContainer">
        <div class="heading">
            <h2 id="title">ToDo list</h2>
            <add-item-form
                v-on:reloadList="getList()"/>
        </div>
        <list-view :items="items"
        v-on:reloadList="getList()" />
    </div>
</template>

<script>
import AddItemForm from "./AddItemForm"
import ListView from "./ListView";

export default {
    components: {
        AddItemForm,
        ListView
    },
    data: function (){
        return{
            items: []
        }
    },
    methods: {
        getList(){
            axios.get('todo/index/')
            .then(response => {
                this.items = response.data
            })
            .catch(error => {
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
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
