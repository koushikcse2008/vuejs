<template>
  <!-- <div class="home" v-if="dispData">
    <input type="text" v-model="dispData.title" class="" />
    <input type="text" v-model="dispData.desc" class="" />
  </div> -->
  <h3>Information:</h3>
    <hr/>
    <p>To view this project, follow the below instruction:</p>
    <p><strong>Run the project by:</strong> 
      <br />npm run serve</p>
    <p><strong>Run the json-server using:</strong> 
      <br /> npm json-server "server/db.json" --watch 
      <br /><strong>OR</strong>
      <br /> npx json-server "server/db.json" --watch 
    </p>
</template>

<script>
export default {
  name: 'HomeView'
}
</script>
