<template>
    <div v-if="todos">
        <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Todo List</h2>

            <div class="row">
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4" v-for="todo in todos" :key="todo.id">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text fw-bold">{{ todo.title }}  
                                <span class="text-success fw-normal fst-italic" v-if="todo.completed === true">Completed</span>
                                <span class="text-danger fw-normal fst-italic" v-else-if="todo.completed === false">Pending</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- <ul>
            <li v-for="todo in todos" :key="todo.id">
                {{ todo }}
            </li>
        </ul> -->
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "Axios",
    data() {
        return {
            todos: ''
        }
    },
    created() {
        this.getUsers();
    },
    methods: {
        getUsers() {
            axios.get('https://jsonplaceholder.typicode.com/todos').then((result) => {
                this.todos = result.data;
                //console.log(this.todos);
            }).catch((error) => {
                console.log(error);
            });
        }
    }
}
</script>

<style scoped>
.card-text { min-height: 96px !important; }
</style>