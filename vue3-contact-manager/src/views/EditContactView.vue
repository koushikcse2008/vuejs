<template>
    <h2>Update Data:</h2>
    <hr />
    <form @submit.prevent="createContact">
        
    <div class="row mb-2">
        <div class="col-lg-6">
            <label>Name:</label>      
            <input type="text" id="cname" v-model.trim.lazy="cname" class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Email Id:</label>
            <input type="text" id="email" v-model.trim.lazy="email" class="form-control" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label>Address:</label> 
            <input type="text" id="address" v-model.trim.lazy="address" class="form-control" />
        </div>
        <div class="col-lg-6"></div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label>Landline:</label> 
            <input type="text" id="landline" v-model.number="landline" class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Mobile:</label> 
            <input type="text" id="mobile" v-model.number="mobile" class="form-control" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button class="btn btn-success mr-2 mt-3">Update</button>
            <router-link to="/contact-list" class="btn btn-warning mt-3"> Cancel </router-link></div>
        <div class="col-lg-6"></div>
    </div>
      
    </form>
</template>

<script>
import axios from 'axios';
import { createToast } from 'mosha-vue-toastify';
import 'mosha-vue-toastify/dist/style.css';

export default {
    name: "EditContactView",
    date() {
        return {
            contacts: [],
            cname: '',
            email: '',
            address: '',
            landline: '',
            mobile: '',            
            titleStyleObject: {
                color: 'green',
                fontWeight: 'bold',
            }
        }
    },
    created() {
        this.getContact(); 
    },
    methods: {
        getContact() {
            axios.get(`http://localhost:3000/contacts/${this.$route.params.id}`)
                 .then((response) => { 
                    this.contacts = response.data;
                    // setTimeout(() => {
                    this.cname.value  = response.data.name; 
                    // }, 1000);
                    // this.cname  = response.data.name; 
                    console.log(this.contacts);
                })
                 .catch((error) => console.log(error));
        },
        createContact(){
            // console.log(cname.value);
            if(cname.value && email.value && address.value && landline.value && mobile.value)
            {
                let formData = {
                    id: this.$route.params.id,
                    name: cname.value,
                    email: email.value,
                    address: address.value,
                    landline: landline.value,
                    mobile: mobile.value 
                }
                axios.put(`http://localhost:3000/contacts/${this.$route.params.id}`, formData)
                    .then(() =>  { this.getContacts() })
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
