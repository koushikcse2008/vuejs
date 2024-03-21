<template>
    <h2>Update Data:</h2>
    <hr />
    <div v-if="dispData" class="edit-form">
    <form @submit.prevent="createContact">
    
    <div class="row mb-2">
        <div class="col-lg-6">
            <label>Name:</label>      
            <input type="text" id="cname" v-model="dispData.cname" class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Email Id:</label>
            <input type="text" id="email" v-model.trim.lazy="dispData.email" class="form-control" />
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <label>Address:</label> 
            <input type="text" id="address" v-model.trim.lazy="dispData.address" class="form-control" />
        </div>
        <div class="col-lg-6"></div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label>Landline:</label> 
            <input type="text" id="landline" v-model.number="dispData.landline" class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Mobile:</label> 
            <input type="text" id="mobile" v-model.number="dispData.mobile" class="form-control" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button class="btn btn-success mr-2 mt-3 me-2">Update</button>
            <router-link to="/contact-list" class="btn btn-warning mt-3"> Cancel </router-link></div>
        <div class="col-lg-6"></div>
    </div>
</form> 
    
</div>
</template>

<script>
import DataService from "../services/DataService";
import { createToast } from 'mosha-vue-toastify';
import 'mosha-vue-toastify/dist/style.css';

export default {
    name: "EditContactView",
    data() {
        return {
            dispData: null
        }
    },  
    created() {
            this.getContact(this.$route.params.id);
    }, 
    // mounted() {
    //     axios.get(`http://localhost:4000/contacts/${this.$route.params.id}`).then((response) => {
    //         this.dispData = response.data;
    //     });
    // },
    methods: {
        getContact(id) {
            DataService.get(`${id}`)
                 .then((response) => { 
                    this.dispData = response.data;
                }).catch(error =>  console.log(error));
        },
        createContact(){
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
                DataService.update(`${this.$route.params.id}`, formData)
                    .then(() =>  { this.getContact() })
                    .catch((error) => console.log(error));
                    createToast('Updated successfully.', { type: 'success'});
    
                    setTimeout(() => {
                        this.$router.push({ name: 'ContactList' });
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
