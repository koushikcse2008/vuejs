@extends('layouts.common')

@section('title', 'Template Refs Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Template Refs Process:</h3>

<strong>#1: Accessing the Refs</strong><br />

<xmp>
@verbatim
<script>
export default {
    mounted() {
    this.$refs.input.focus()
    }
}
</script>

<template>
    <input ref="input" />
</template>
@endverbatim
</xmp>

<strong>#2: v-for</strong><br />
<xmp>
@verbatim
<script>
export default {
    data() {
    return {
        list: [
        /* ... */
        ]
    }
    },
    mounted() {
    console.log(this.$refs.items)
    }
}
</script>

<template>
    <ul>
    <li v-for="item in list" ref="items">
        {{ item }}
    </li>
    </ul>
</template>
@endverbatim
</xmp>

<strong>#3: Function Refs</strong><br />
<xmp>
@verbatim
<input :ref="(el) => { /* assign el to a property or ref */ }">
@endverbatim
</xmp>

<strong>#4: Ref on Component </strong><br />
<xmp>
@verbatim
<script>
import Child from './Child.vue'

export default {
    components: {
    Child
    },
    mounted() {
    // this.$refs.child will hold an instance of <Child />
    }
}
</script>

<template>
    <Child ref="child" />
</template>

=============================================================

export default {
    expose: ['publicData', 'publicMethod'],
    data() {
      return {
        publicData: 'foo',
        privateData: 'bar'
      }
    },
    methods: {
      publicMethod() {
        /* ... */
      },
      privateMethod() {
        /* ... */
      }
    }
  }

@endverbatim
</xmp>


@endsection