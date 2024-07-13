@extends('layouts.common')

@section('title', 'Conditional Rendering Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Conditional Rendering Process:</h3>

<strong>#1: v-if</strong><br />

<xmp>
@verbatim
<h1 v-if="awesome">Vue is awesome!</h1>
@endverbatim
</xmp>

<strong>#2: v-else</strong><br />

<xmp>
@verbatim
<button @click="awesome = !awesome">Toggle</button>

<h1 v-if="awesome">Vue is awesome!</h1>
<h1 v-else>Oh no 😢</h1>
@endverbatim
</xmp>

<strong>#3: v-else-if</strong><br />

<xmp>
@verbatim
<div v-if="type === 'A'">
    A
</div>
<div v-else-if="type === 'B'">
    B
</div>
<div v-else-if="type === 'C'">
    C
</div>
<div v-else>
    Not A/B/C
</div>
@endverbatim
</xmp>

<strong>#4: v-if on template tag </strong><br />

<xmp>
@verbatim
<template v-if="ok">
    <h1>Title</h1>
    <p>Paragraph 1</p>
    <p>Paragraph 2</p>
</template>
  
v-else and v-else-if can also be used on template tag
@endverbatim
</xmp>

<strong>#5: v-show</strong><br />

<xmp>
@verbatim
<h1 v-show="ok">Hello!</h1>

The difference is that an element with v-show will always be rendered and remain in the DOM; v-show only toggles the display CSS property of the element.
v-show doesn't support the <template> element, nor does it work with v-else.
@endverbatim
</xmp>

<strong>#6: v-if vs. v-show</strong><br />

<xmp>
@verbatim
v-if is "real" conditional rendering because it ensures that event listeners and child components inside the conditional block are properly destroyed and re-created during toggles.
v-if is also lazy: if the condition is false on initial render, it will not do anything - the conditional block won't be rendered until the condition becomes true for the first time.
In comparison, v-show is much simpler - the element is always rendered regardless of initial condition, with CSS-based toggling.
Generally speaking, v-if has higher toggle costs while v-show has higher initial render costs. So prefer v-show if you need to toggle something very often, and prefer v-if if the condition is unlikely to change at runtime.
@endverbatim
</xmp>

<strong>#7: v-if with v-for</strong><br />

<xmp>
@verbatim
Note: It's not recommended to use v-if and v-for on the same element due to implicit precedence. Refer to style guide for details.

When v-if and v-for are both used on the same element, v-if will be evaluated first. See the list rendering guide for details.
@endverbatim
</xmp>

@endsection