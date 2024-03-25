<template>
    <h2 class="text-danger border-bottom border-danger border-2 fw-bold">Style Binding</h2>

    <div class="p-2 bg-info bg-opacity-10 border border-info rounded fw-bold text-success border-2">
        Inline Style
    </div>

        <div>
            <p :style="{ color: 'green'}">Font color</p>
            <p :style="{ backgroundColor: 'blue', color:'white'}">Background color</p>
            <p :style="{ fontSize: '50px'}">Font Size</p>
            <p :style="{ fontStyle: 'italic'}">Font Style Italic</p>
        </div>

    <div class="p-2 bg-info bg-opacity-10 border border-info rounded fw-bold text-success border-2">
        Internal Style
    </div>
        <div>
            <p :style="color">Font color</p>
            <p :style="background">Background color</p>
            <p :style="fontSize">Font Size</p>
            <p :style="fontStyle">Font Style Italic</p>
        </div>

    <div class="p-2 bg-info bg-opacity-10 border border-info rounded fw-bold text-success border-2">
        External Style
    </div>
        <div>
            <p class="color">Font color</p>
            <p class="background">Background color</p>
            <p class="font-size">Font Size</p>
            <p class="font-style">Font Style Italic</p>
        </div>
  

  </template>
  <script>
  export default {
    name: 'StyleBindings',
    data() {
      return {
        //enter variable
        color: { 'color': '#f00' },
        background: { 'background-color': "yellow" },
        fontSize: { 'font-size': "40px" },
        fontStyle: { 'font-style': 'italic'}
      }
    }
  }
  </script>
  
  