<template>
    <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Bootstrap</h2>
    <p>Follow the below steps:</p>
    <p>Step 1: Install the bootstrap packages using npm e.g. $npm install bootstrap --save</p>
    <p>Step 2: Add the css and js in the "src/main.js" file</p>
    <p>
        import '../node_modules/bootstrap/dist/css/bootstrap.css'; <br />
        import '../node_modules/bootstrap/dist/js/bootstrap.bundle.js';
    </p>

    <p>Buttons:</p>
    <p>
        <button type="button" class="btn btn-primary me-2">Primary</button>
        <button type="button" class="btn btn-secondary me-2">Secondary</button>
        <button type="button" class="btn btn-success me-2">Success</button>
        <button type="button" class="btn btn-danger me-2">Danger</button>
        <button type="button" class="btn btn-warning me-2">Warning</button>
        <button type="button" class="btn btn-info me-2">Info</button>
        <button type="button" class="btn btn-light me-2">Light</button>
        <button type="button" class="btn btn-dark me-2">Dark</button>

        <button type="button" class="btn btn-link">Link</button>
    </p>

    <p>Outlined Buttons:</p>
    <p>
        <button type="button" class="btn btn-outline-primary me-2">Primary</button>
        <button type="button" class="btn btn-outline-secondary me-2">Secondary</button>
        <button type="button" class="btn btn-outline-success me-2">Success</button>
        <button type="button" class="btn btn-outline-danger me-2">Danger</button>
        <button type="button" class="btn btn-outline-warning me-2">Warning</button>
        <button type="button" class="btn btn-outline-info me-2">Info</button>
        <button type="button" class="btn btn-outline-light me-2">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>
    </p>
</template>

<script>
export default {
    name: "Bootstrap",
    data() {
        return {
            //declare variable
        }
    },
}
</script>
