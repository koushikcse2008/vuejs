@extends('layouts.common')

@section('title', 'Template Syntax Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Template Syntax Process:</h3>

<strong>#1: Text Interpolation: </strong><br />
<xmp>
@verbatim
<span>Message: {{ msg }}</span>
@endverbatim
</xmp>

<strong>#2: Raw HTML Interpolation: </strong><br />
<xmp>
@verbatim
<p>Using text interpolation: {{ rawHtml }}</p>
<p>Using v-html directive: <span v-html="rawHtml"></span></p>
@endverbatim
</xmp>

<strong>#3: Attribute Binding: </strong><br />
<xmp>
@verbatim
<div v-bind:id="dynamicId"></div>
@endverbatim
</xmp>


<strong>#4: Shorthand: </strong><br />
<xmp>
@verbatim
<div :id="dynamicId"></div>
@endverbatim
</xmp>


<strong>#4: Boolean Attribute: </strong><br />
<xmp>
@verbatim
<button :disabled="isButtonDisabled">Button</button>
@endverbatim
</xmp>

<strong>#5: Dynamic Binding Multiple Attribute: </strong><br />
<xmp>
@verbatim
data() {
    return {
        objectOfAttrs: {
            id: 'container',
            class: 'wrapper'
        }
    }
}

<div v-bind="objectOfAttrs"></div>
@endverbatim
</xmp>

<strong>#6: Using JavaScript Expressions : </strong><br />
<xmp>
@verbatim
{{ number + 1 }}

{{ ok ? 'YES' : 'NO' }}

{{ message.split('').reverse().join('') }}

<div :id="`list-${id}`"></div>
@endverbatim
</xmp>

<strong>#7: Expressions Only : </strong><br />
<xmp>
@verbatim
<!-- this is a statement, not an expression: -->
{{ var a = 1 }}

<!-- flow control won't work either, use ternary expressions -->
{{ if (ok) { return message } }}
@endverbatim
</xmp>

<strong>#8: Calling Functions: </strong><br />
<xmp>
@verbatim
<time :title="toTitleDate(date)" :datetime="date">
    {{ formatDate(date) }}
</time>
@endverbatim
</xmp>

<strong>#9: Directives: </strong><br />
<xmp>
@verbatim
<p v-if="seen">Now you see me</p>
@endverbatim
</xmp>

<strong>#10: Arguments: </strong><br />
<xmp>
@verbatim
<a v-bind:href="url"> ... </a>

<!-- shorthand -->
<a :href="url"> ... </a>

<a v-on:click="doSomething"> ... </a>

<!-- shorthand -->
<a @click="doSomething"> ... </a>
@endverbatim
</xmp>

<strong>#11: Dynamic Arguments: </strong><br />
<xmp>
@verbatim
<a v-bind:[attributeName]="url"> ... </a>

<!-- shorthand -->
<a :[attributeName]="url"> ... </a>

<a v-on:[eventName]="doSomething"> ... </a>

<!-- shorthand -->
<a @[eventName]="doSomething"> ... </a>
@endverbatim
</xmp>

<strong>#12: Dynamic Argument Syntax Constraints : </strong><br />
<xmp>
@verbatim
<!-- This will trigger a compiler warning. -->
<a :['foo' + bar]="value"> ... </a>

<a :[someAttr]="value"> ... </a>
@endverbatim
</xmp>

<strong>#13: Modifiers: </strong><br />
<xmp>
@verbatim
<form @submit.prevent="onSubmit">...</form>
@endverbatim
</xmp>

<strong>#14: Modifier Details: </strong><br />
<img src="{{ asset('frontend/images/modifier.jpg') }}" alt="Modifier details" />

@endsection