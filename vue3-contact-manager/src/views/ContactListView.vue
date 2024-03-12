<template>
    <h3>Contact List</h3>
    <hr />
    <table className="table table-bordered">
    <thead className="bg-success text-white">
        <tr>
        <th scope="col">#Sl.</th>
        <th scope="col">Name</th>
        <th scope="col">Email id</th>
        <th scope="col">Address</th>
        <th scope="col">Landline</th>
        <th scope="col">Mobile</th>
        <th scope="col" colSpan="3">Actions</th>
        </tr>
    </thead>
    <tbody className="bg-light">
        <tr v-for="contact in contacts" :key="contact.id">
            <th scope="row" className="text-center">{{contact.id}}</th>
            <td>{{ contact.cname }}</td>
            <td>{{ contact.email }}</td>
            <td>{{ contact.address }}</td>
            <td>{{ contact.landline }}</td>
            <td>{{ contact.mobile }}</td>
            <td colSpan="3">
                <router-link :to="'/show-contact/'+ contact.id" className="btn btn-outline-success mr-2"> View </router-link>
                <router-link :to="'/edit-contact/'+ contact.id" className="btn btn-outline-warning mr-2"> Edit </router-link>
                <button type="button" className="btn btn-outline-danger" @click="handleDelete(contact.id)">Delete</button>
            </td>
        </tr> 
    </tbody>
    </table>
</template>

<script>
import axios from 'axios';
import { createToast } from 'mosha-vue-toastify';
import 'mosha-vue-toastify/dist/style.css';
import Swal from 'sweetalert2';

export default {
    name: "ContactList",
    data() {
        return {
            contacts: [],
        };
    },
    created() {
        this.getContacts();
        // createToast('Fetched successfully.', { type: 'success',});        
    },
    methods: {
        getContacts() {
            axios.get('http://localhost:3000/contacts')
                 .then((response) => { this.contacts = response.data })
                 .catch((error) => console.log(error));
        },
        handleDelete(id) {
            
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {

                axios.delete(`http://localhost:3000/contacts/${id}`).then(() => {
                    this.getContacts();
                });

              Swal.fire(
                'Deleted!',
                'Your contact has been deleted.',
                'success'
              );
              
            }
          });
        }
    }
}
</script>

<style scoped>

</style>