<template>
    <h2>Update Data:</h2>
    <hr />
    <div v-if="currentContact" class="edit-form">
    <form @submit.prevent="createContact">
    <div class="row mb-2">
        <div class="col-lg-6">
            <label>Name:</label>      
            <input type="text" id="cname" v-model="currentContact.cname" class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Email Id:</label>
            <input type="text" id="email" v-model.trim.lazy="currentContact.email" class="form-control" />
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <label>Address:</label> 
            <input type="text" id="address" v-model.trim.lazy="currentContact.address" class="form-control" />
        </div>
        <div class="col-lg-6"></div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label>Landline:</label> 
            <input type="text" id="landline" v-model.number="currentContact.landline" class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Mobile:</label> 
            <input type="text" id="mobile" v-model.number="currentContact.mobile" class="form-control" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button class="btn btn-success mr-2 mt-3">Update</button>
            <router-link to="/contact-list" class="btn btn-warning mt-3"> Cancel </router-link></div>
        <div class="col-lg-6"></div>
    </div>
      
    </form>
</div>
</template>

<script>
import axios from 'axios';
import { createToast } from 'mosha-vue-toastify';
import 'mosha-vue-toastify/dist/style.css';

export default {
    name: "EditContact",
    props: {
        id: Number,
    },
    date() {
        return {
            currentContact: {}
        }
    },   
    mounted() {
        this.getContact(this.$route.params.id);
    }, 
    methods: {
        getContact(id) {
            axios.get(`http://localhost:3000/contacts/${id}`)
                 .then((response) => { 
                    this.currentContact = response.data;
                    console.log(this.currentContact);
                }).catch(error =>  console.log(error));
        },
        createContact(){
            // console.log(cname.value);
            if(cname.value && email.value && address.value && landline.value && mobile.value)
            {
                let formData = {
                    id: this.$route.params.id,
                    cname: cname.value,
                    email: email.value,
                    address: address.value,
                    landline: landline.value,
                    mobile: mobile.value 
                }
                axios.put(`http://localhost:3000/contacts/${this.$route.params.id}`, formData)
                    .then(() =>  { this.getContact() })
                    .catch((error) => console.log(error));
                    createToast('Updated successfully.', { type: 'success'});
    
                    setTimeout(() => {
                        this.$router.push({ name: 'contactList' });
                    }, 2000);
            } else {
                createToast('Please fill all the fields.', { type: 'danger'});
            }
        }
    }
};
</script>

<style scoped>

</style>
