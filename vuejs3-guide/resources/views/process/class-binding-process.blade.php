@extends('layouts.common')

@section('title', 'Class Binding Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Class Binding Process:</h3>

<strong>#1: Binding to Objects </strong><br />

<xmp>
@verbatim
<div :class="{ active: isActive }"></div>

data() {
    return {
      isActive: true,
      hasError: false
    }
}

<div
  class="static"
  :class="{ active: isActive, 'text-danger': hasError }"
></div>

It will render:
<div class="static active"></div>
@endverbatim
</xmp>


<strong>#2: Example 2 </strong><br />
<xmp>
@verbatim
data() {
    return {
      classObject: {
        active: true,
        'text-danger': false
      }
    }
}

<div :class="classObject"></div>

This will render:
<div class="active"></div>
@endverbatim
</xmp>

<strong>#3: Example 3 </strong><br />
<xmp>
@verbatim
data() {
    return {
      isActive: true,
      error: null
    }
  },
computed: {
    classObject() {
        return {
        active: this.isActive && !this.error,
        'text-danger': this.error && this.error.type === 'fatal'
        }
    }
}
  
<div :class="classObject"></div>
@endverbatim
</xmp>

<strong>#4: Example 4 </strong><br />
<xmp>
@verbatim
data() {
    return {
      activeClass: 'active',
      errorClass: 'text-danger'
    }
}
<div :class="[activeClass, errorClass]"></div>

Which will render:
<div class="active text-danger"></div>

<div :class="[isActive ? activeClass : '', errorClass]"></div>
<div :class="[{ [activeClass]: isActive }, errorClass]"></div>
@endverbatim
</xmp>

<strong>#5: With Components  </strong><br />
<xmp>
@verbatim
<!-- child component template -->
<p class="foo bar">Hi!</p>

<!-- when using the component -->
<MyComponent class="baz boo" />

<p class="foo bar baz boo">Hi!</p>

The same is true for class bindings:
<MyComponent :class="{ active: isActive }" />

When isActive is truthy, the rendered HTML will be:
<p class="foo bar active">Hi!</p>


<!-- MyComponent template using $attrs -->
<p :class="$attrs.class">Hi!</p>
<span>This is a child component</span>
<MyComponent class="baz" />

Will render:
<p class="baz">Hi!</p>
<span>This is a child component</span>
@endverbatim
</xmp>

@endsection