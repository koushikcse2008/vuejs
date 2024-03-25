<template>
  <h2 class="text-danger border-bottom border-danger fw-bold">Form Input Binding</h2>

  <p>Message is: {{ message }}</p>
  <input v-model="message" placeholder="edit me" /> <br /> <br />

  <span>Multiline message is:</span> 
  <p style="white-space: pre-line;">{{ message1 }}</p>
  <textarea v-model="message1" placeholder="add multiple lines" class="form-control" style="resize: none; width: 500px; height: 200px;"></textarea><br /> <br />

  <input type="checkbox" id="checkbox" v-model="checked" />
  <label for="checkbox">Checked: {{ checked }}</label>

  <br /> <br />
  <div>Checked names: {{ checkedNames }}</div>

  <input type="checkbox" id="jack" value="Jack" v-model="checkedNames">
  &nbsp;<label for="jack">Jack</label>

  &nbsp;<input type="checkbox" id="john" value="John" v-model="checkedNames">
  &nbsp;<label for="john">John</label>

  &nbsp;<input type="checkbox" id="mike" value="Mike" v-model="checkedNames">
  &nbsp;<label for="mike">Mike</label>

  <br /> <br /><div>Picked: {{ picked }}</div>

  &nbsp;<input type="radio" id="one" value="One" v-model="picked" />
  &nbsp;<label for="one">One</label>

  &nbsp;<input type="radio" id="two" value="Two" v-model="picked" />
  &nbsp;<label for="two">Two</label>

  <br /> <br /><div>Selected: {{ selected }}</div>

  <select v-model="selected">
    <option disabled value="">Please select one</option>
    <option>A</option>
    <option>B</option>
    <option>C</option>
  </select>

</template>
<script>
export default {
  name: 'FormInputBinding',
  data() {
    return {
      //enter variable
      message: "",
      message1: "",
      checked: true,
      checkedNames: [],
      picked: "",
      selected: ""
    }
  }
}
</script>

  