<template>
    <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Json Server</h2>
    <p>Follow the below steps:</p>
    <p class="fw-bold">Install the package: $npm install json-server --save</p>
    <p>Create one json file in the "server" flder like db.json file</p>
    <p>Enter one json data as we did in the db.json file.</p>
    <p>Run the json server usine below command:</p>
    <p class="fw-bold">
        $npm json-server server/db.json<br />
        OR<br />
        $npx json-server server/db.json
    </p>
</template>

<script>
export default {
    name: "JsonServer",
    data() {
        return {
            //declare all variable
        }
    },
}
</script>
