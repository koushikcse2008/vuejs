<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success ps-4">
    <h3 class="navbar-brand" >Contact Manager Updated</h3>
    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarNav">
        <ul className="navbar-nav">
        <li className="nav-item">
            <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li className="nav-item">
            <router-link to="/contact-list" class="nav-link">Contact List</router-link>
        </li>
        <li className="nav-item">
            <router-link to="/add-contact" class="nav-link">Add Contact</router-link>
        </li>
        </ul>
    </div>
    </nav>
</template>

<script>
export default {
    name: "Header"
};
</script>

<style scoped>

</style>
