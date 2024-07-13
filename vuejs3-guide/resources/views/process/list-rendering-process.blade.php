@extends('layouts.common')

@section('title', 'List Rendering Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the List Rendering Process:</h3>

<strong>#1: v-for</strong><br />

<xmp>
@verbatim
data() {
    return {
        parentMessage: 'Parent',
        items: [{ message: 'Foo' }, { message: 'Bar' }]
    }
}

<li v-for="(item, index) in items">
{{ parentMessage }} - {{ index }} - {{ item.message }}
</li>
@endverbatim
</xmp>

<strong>#2: v-for with an Object </strong><br />

<xmp>
@verbatim
data() {
    return {
      myObject: {
        title: 'How to do lists in Vue',
        author: 'Jane Doe',
        publishedAt: '2016-04-10'
      }
    }
}

<li v-for="(value, key, index) in myObject">
    {{ index }}. {{ key }}: {{ value }}
</li>
@endverbatim
</xmp>

<strong>#3: v-for with a Range</strong><br />

<xmp>
@verbatim
<span v-for="n in 10">{{ n }}</span>
@endverbatim
</xmp>

<strong>#4: v-for on template tag</strong><br />

<xmp>
@verbatim
<ul>
    <template v-for="item in items">
        <li>{{ item.msg }}</li>
        <li class="divider" role="presentation"></li>
    </template>
</ul>
@endverbatim
</xmp>

<strong>#5: v-for with v-if</strong><br />

<xmp>
@verbatim
Note: It's not recommended to use v-if and v-for on the same element due to implicit precedence. Refer to style guide for details.

When they exist on the same node, v-if has a higher priority than v-for. That means the v-if condition will not have access to variables from the scope of the v-for:
template

<!--
This will throw an error because property "todo"
is not defined on instance.
-->
<li v-for="todo in todos" v-if="!todo.isComplete">
  {{ todo.name }}
</li>

This can be fixed by moving v-for to a wrapping <template> tag (which is also more explicit):
template

<template v-for="todo in todos">
  <li v-if="!todo.isComplete">
    {{ todo.name }}
  </li>
</template>
@endverbatim
</xmp>

<strong>#6: Maintaining State with key</strong><br />

<xmp>
@verbatim
<template v-for="todo in todos" :key="todo.name">
    <li>{{ todo.name }}</li>
</template>
@endverbatim
</xmp>

<strong>#7: v-for with a Component </strong><br />

<xmp>
@verbatim
<MyComponent v-for="item in items" :key="item.id" />

However, this won't automatically pass any data to the component, because components have isolated scopes of their own. In order to pass the iterated data into the component, we should also use props:

<MyComponent
  v-for="(item, index) in items"
  :item="item"
  :index="index"
  :key="item.id"
/>
@endverbatim
</xmp>

<strong>#8: Array Change Detection</strong><br /><br />

<strong>#9: Mutation Methods</strong><br />

<xmp>
@verbatim
Vue is able to detect when a reactive array's mutation methods are called and trigger necessary updates. These mutation methods are:
push()
pop()
shift()
unshift()
splice()
sort()
reverse()
@endverbatim
</xmp>

<strong>#10: Replacing an Array</strong><br />

<xmp>
@verbatim
this.items = this.items.filter((item) => item.message.match(/Foo/))
@endverbatim
</xmp>

<strong>#11: Displaying Filtered/Sorted Results </strong><br />

<xmp>
@verbatim
data() {
    return {
        sets: [[ 1, 2, 3, 4, 5 ], [6, 7, 8, 9, 10]]
    }
},
methods: {
    even(numbers) {
        return numbers.filter(number => number % 2 === 0)
    }
}

<ul v-for="numbers in sets">
<li v-for="n in even(numbers)">{{ n }}</li>
</ul>
@endverbatim
</xmp>

@endsection