<template>
    <h3>Contact Details:</h3>
    <hr />
    <ul className="list-group  mb-2 col-lg-12">
      <li className="list-group-item active" aria-current="true"><strong>Name:</strong> {{contact.name}}</li>
      <li className="list-group-item"><strong>Email Id:</strong> {{contact.email}}</li>
      <li className="list-group-item"><strong>Address:</strong> {{contact.address}}</li>
      <li className="list-group-item"><strong>Landline:</strong> {{contact.landline}}</li>
      <li className="list-group-item"><strong>Mobile:</strong> {{contact.mobile}}</li>
    </ul>

    <router-link to="/contact-list" className="btn btn-danger">Back</router-link>
</template>

<script>
import axios from 'axios';

export default {
    name: "ShowContactView",
    data() {
        return {
            contact: {}
        }
    },
    created() {
        // console.log(this.$route.params.id);
        this.getContacts();
    },
    methods: {
        getContacts() {
            axios.get(`http://localhost:3000/contacts/${this.$route.params.id}`)
                 .then((response) => { this.contact = response.data })
                 .catch((error) => console.log(error));
        },
    }
}
</script>

<style scoped>

</style>
