<template>
  <h2 class="text-danger border-bottom border-danger fw-bold">Class Binding</h2>

  <div :class="{ active: isActive, 'text-success': greenText }"> isActive set to true.</div>
  <div :class="{ 'fw-bold': boldText }"> isActive set to true.</div>
  <div :class="classObject"> Class Object assign to div</div>

  <div :class="[activeClass, errorClass, fwBold]">Class array</div>

  <div :class="[isActive ? activeClass : '', errorClass]">Condition based class</div>

</template>
<script>
export default {
  name: 'ClassBindings',
  data() {
    return {
      //enter variable
      isActive: true,
      greenText: true,
      boldText: true,
      classObject: {
        active: true,
        'text-danger': true,
        "fw-bold": true
      },
      activeClass: 'active',
      errorClass: 'text-info',
      fwBold: 'fw-bold'
    }
  }
}
</script>

