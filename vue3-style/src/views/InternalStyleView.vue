<template>
   <div>
    <p :style="color">Font color</p>
    <p :style="background">Background color</p>
    <p :style="fontSize">Font Size</p>
    <p :style="fontStyle">Font Style Italic</p>
   </div>
</template>

<script>
export default {
   data() {
      return {
         color: { 'color': '#f00' },
         background: { 'background-color': "yellow" },
         fontSize: { 'font-size': "40px" },
         fontStyle: { 'font-style': 'italic'}
      };
    }
}
</script>
