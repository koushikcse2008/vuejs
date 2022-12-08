<template>
    <h2>Add Data:</h2>
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
            <button class="btn btn-success mr-2 mt-3">Create</button>
            <router-link to="/contact-list" class="btn btn-warning mt-3"> Cancel </router-link></div>
        <div class="col-lg-6"></div>
    </div>
      
    </form>
</template>

<script>
import axios from 'axios';
import { createToast } from 'mosha-vue-toastify';
import 'mosha-vue-toastify/dist/style.css';

import { Form, Field } from 'vee-validate';
import * as Yup from 'yup';

const schema = Yup.object().shape({
    title: Yup.string()
        .required('Title is required'),
    firstName: Yup.string()
        .required('First Name is required'),
    lastName: Yup.string()
        .required('Last name is required'),
    dob: Yup.string()
        .required('Date of Birth is required')
        .matches(/^\d{4}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/, 'Date of Birth must be a valid date in the format YYYY-MM-DD'),
    email: Yup.string()
        .required('Email is required')
        .email('Email is invalid'),
    password: Yup.string()
        .min(6, 'Password must be at least 6 characters')
        .required('Password is required'),
    confirmPassword: Yup.string()
        .oneOf([Yup.ref('password'), null], 'Passwords must match')
        .required('Confirm Password is required'),
    acceptTerms: Yup.string()
        .required('Accept Ts & Cs is required')
});

export default {
    name: "AddContactView",
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
    methods: {
        getContacts() {
            axios.get('http://localhost:3000/contacts')
                 .then((response) => { this.contacts = response.data })
                 .catch((error) => console.log(error));
        },
        createContact(){
            // console.log(cname.value);
            if(cname.value && email.value && address.value && landline.value && mobile.value)
            {
                let formData = {
                    id: Math.floor(Math.random() * (10 - 1 + 1)) + 1,
                    name: cname.value,
                    email: email.value,
                    address: address.value,
                    landline: landline.value,
                    mobile: mobile.value 
                }
                axios.post('http://localhost:3000/contacts', formData)
                    .then(() =>  { this.getContacts() })
                    .catch((error) => console.log(error));
                    createToast('Added successfully.', { type: 'success'});
    
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
