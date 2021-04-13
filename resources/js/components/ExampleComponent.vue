<template>
    <div class="container">
        <div class="heading">
            <h1 id="title">Todo List</h1>
            <addItemForm v-on:reloadlist="getList()"></addItemForm>
         </div>  <!-- It's Props we are passing to the listView    -->
        <listView :items="items" v-on:reloadlist="getList()"></listView>
    </div>
</template>

<script>
import addItemForm from "./addItemForm";
import listView from "./listView";

export default {
    components: {
        addItemForm,
        listView
    },
    data: function () {
        return {
            items: []
        }
    },
    methods: {
        getList (){
            console.log("The update function is called.");
            axios.get('api/items')
            .then(response => {
                this.items = response.data
            })
            .catch( error => {
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
    }
};
</script>

<style scoped>
.container {
    width: 550px;
    margin: 2rem auto;
    
}
.heading {
    background-color: #f8f5f1;
    padding: 10px auto;
}
#title {
    text-align: center;
}
</style>
