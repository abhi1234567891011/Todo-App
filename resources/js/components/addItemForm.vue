<template>
    <div class="addItem">
        <input type="text" v-model="item.name" />
        <button type="submit" value="add" class="btn" @click="addItem()">
            Add
        </button>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            item: {
                name: ""
            }
        };
    },
    methods: {
        addItem() {
            if (this.item.name === "") {
                return;
            }

            

            axios({
                method: "post",
                url: "/api/item/store",
                data: {
                    name: `${this.item.name}`
                }
            }).then(response => {
                if(response.status == 201){
                    this.item.name = "";
                    console.log("Item is added");
                    this.$emit('reloadlist');

                }
            }).catch(error => {
                console.log("error name");
            });

        }
    }
};
</script>

<style scoped>
.addItem {
    margin: 1rem;
}
.btn {
    border-radius: 5px;
    background-color: #eeebdd;
    color: #630000;
    outline: none;
    transition: all 1s ease;
    padding: 0.3rem 0.8rem;
    margin: 1rem;
    border: 0px;
    font-size: 1rem;
    cursor: pointer;
}
.btn:hover {
    background-color: #2b2e4a;
    color: #e84545;
}
</style>
