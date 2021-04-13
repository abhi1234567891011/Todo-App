<template>
  <div class="item">
    <input type="checkbox" @change="updateCheck()" v-model="item.completed" />

    <span :class="[item.completed ? 'completed' : '', 'itemText']">{{
      item.name
    }}</span>
    <button @click="removeItem()" class="btn">del</button>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:['item'],
        methods:{
        updateCheck(){
            axios.put('api/item/' + this.item.id, {
                completed: this.item.completed

            }).then(response => {
                if(response.status == 200){
                    console.log(this.item.completed);
                    this.$emit('itemchanged');
                }
            })
            .catch( error => {
                console.log( error );
            })
        },
        removeItem() {
            axios.delete('/api/item/' + this.item.id)
            .then(response => {
                this.$emit('itemchanged');
            })
        }
        }
    }
</script>

<style scoped>
.item {
  padding: 0.8rem;
  margin: 1rem;
  font-family: "Courier New", Courier, monospace;
  font-weight: 800;
  border: black solid 1px;
  padding: 1.2rem;
}
.completed {
  color: rgba(0, 0, 0, 0.7);
  text-decoration: line-through;
}
.btn {
  position: absolute;
  border-radius: 5px;
  background-color: #630000;
  color: #eeebdd;
  outline: none;
  transition: all 1s ease;
  padding: 0.3rem 0.8rem;
  margin-left: 4.5rem;
  border: 0px;
  font-size: 1rem;
  cursor: pointer;
}
.btn:hover {
  background-color: #eeebdd;
  color: #e84545;
}
</style>
