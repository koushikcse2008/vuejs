@extends('layouts.common')

@section('title', 'Event Handling Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Event Handling Process:</h3>

<strong>#1: Inline Handlers</strong><br />

<xmp>
@verbatim
data() {
    return {
        count: 0
    }
}

<button @click="count++">Add 1</button>
<p>Count is: {{ count }}</p>
@endverbatim
</xmp>

<strong>#2: Method Handlers</strong><br />

<xmp>
@verbatim
data() {
    return {
        name: 'Vue.js'
    }
},
methods: {
    greet(event) {
        // `this` inside methods points to the current active instance
        alert(`Hello ${this.name}!`)
        // `event` is the native DOM event
        if (event) {
        alert(event.target.tagName)
        }
    }
}

<!-- `greet` is the name of the method defined above -->
<button @click="greet">Greet</button>
@endverbatim
</xmp>

<strong>#3: Calling Methods in Inline Handlers </strong><br />

<xmp>
@verbatim
methods: {
    say(message) {
        alert(message)
    }
}

template

<button @click="say('hello')">Say hello</button>
<button @click="say('bye')">Say bye</button>
@endverbatim
</xmp>

<strong>#4: Accessing Event Argument in Inline Handlers </strong><br />

<xmp>
@verbatim
<!-- using $event special variable -->
<button @click="warn('Form cannot be submitted yet.', $event)">
    Submit
</button>

<!-- using inline arrow function -->
<button @click="(event) => warn('Form cannot be submitted yet.', event)">
    Submit
</button>

js

methods: {
    warn(message, event) {
        // now we have access to the native event
        if (event) {
        event.preventDefault()
        }
        alert(message)
    }
}
@endverbatim
</xmp>

<strong>#5: Event Modifiers</strong><br />

<xmp>
@verbatim
To address this problem, Vue provides event modifiers for v-on. Recall that modifiers are directive postfixes denoted by a dot.
.stop
.prevent
.self
.capture
.once
.passive

<!-- the click event's propagation will be stopped -->
<a @click.stop="doThis"></a>

<!-- the submit event will no longer reload the page -->
<form @submit.prevent="onSubmit"></form>

<!-- modifiers can be chained -->
<a @click.stop.prevent="doThat"></a>

<!-- just the modifier -->
<form @submit.prevent></form>

<!-- only trigger handler if event.target is the element itself -->
<!-- i.e. not from a child element -->
<div @click.self="doThat">...</div>

<!-- use capture mode when adding the event listener     -->
<!-- i.e. an event targeting an inner element is handled -->
<!-- here before being handled by that element           -->
<div @click.capture="doThis">...</div>

<!-- the click event will be triggered at most once -->
<a @click.once="doThis"></a>

<!-- the scroll event's default behavior (scrolling) will happen -->
<!-- immediately, instead of waiting for `onScroll` to complete  -->
<!-- in case it contains `event.preventDefault()`                -->
<div @scroll.passive="onScroll">...</div>
@endverbatim
</xmp>

<strong>#6: Key Modifiers</strong><br />

<xmp>
@verbatim
<!-- only call `submit` when the `key` is `Enter` -->
<input @keyup.enter="submit" />

<input @keyup.page-down="onPageDown" />
@endverbatim
</xmp>

<strong>#7: Key Aliases </strong><br />

<xmp>
@verbatim
Vue provides aliases for the most commonly used keys:
.enter
.tab
.delete (captures both "Delete" and "Backspace" keys)
.esc
.space
.up
.down
.left
.right
@endverbatim
</xmp>

<strong>#8: System Modifier Keys </strong><br />

<xmp>
@verbatim
.ctrl
.alt
.shift
.meta

<!-- Alt + Enter -->
<input @keyup.alt.enter="clear" />

<!-- Ctrl + Click -->
<div @click.ctrl="doSomething">Do something</div>
@endverbatim
</xmp>

<strong>#9: .exact Modifier </strong><br />

<xmp>
@verbatim
<!-- this will fire even if Alt or Shift is also pressed -->
<button @click.ctrl="onClick">A</button>

<!-- this will only fire when Ctrl and no other keys are pressed -->
<button @click.ctrl.exact="onCtrlClick">A</button>

<!-- this will only fire when no system modifiers are pressed -->
<button @click.exact="onClick">A</button>
@endverbatim
</xmp>

<strong>#10: Mouse Button Modifiers</strong><br />

<xmp>
@verbatim
.left
.right
.middle
@endverbatim
</xmp>

@endsection