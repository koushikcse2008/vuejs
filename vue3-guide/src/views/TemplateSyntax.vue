<template>
    <h2 class="text-danger border-bottom border-danger border-2 fw-bold">Template Syntax</h2>
    <p>Message: {{ msg }}</p> 

    <p>Using text interpolation: {{ rawHtml }}</p>
    <p>Using v-html directive: <span v-html="rawHtml"></span></p>

    <div v-bind:id="dynamicId" class="border border-success p-1 mb-2">Dynamic div id</div>

    <p>Disabled Button: <button :disabled="isButtonDisabled" class="btn btn-success">Button</button></p>

    <div v-bind="objectOfAttrs">Multiple Object Attribute</div>

    <p>Ternary Operator: {{ ok ? 'YES' : 'NO' }}, Reverse Msg:  {{ msg.split('').reverse().join('') }}</p>

</template>
<script>
export default {
  name: 'TemplateSyntax',
  data() {
    return {
        //enter variable
        msg: "Display a message",
        rawHtml: "<strong>This is raw HTML.</strong>",
        dynamicId: "sampleDiv",
        isButtonDisabled: true,
        objectOfAttrs: {
          id: 'container',
          class: 'wrapper mb-3'
        },
        ok: true
    }
  }
}
</script>
  
  