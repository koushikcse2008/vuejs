@extends('layouts.common')

@section('title', 'Form Input Binding Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Form Input Binding Process:</h3>

<strong>#1: Text</strong><br />

<xmp>
@verbatim
<p>Message is: {{ message }}</p>
<input v-model="message" placeholder="edit me" />
@endverbatim
</xmp>

<strong>#2: Multiline text </strong><br />

<xmp>
@verbatim
<span>Multiline message is:</span>
<p style="white-space: pre-line;">{{ message }}</p>
<textarea v-model="message" placeholder="add multiple lines"></textarea>
@endverbatim
</xmp>

<strong>#3: Checkbox</strong><br />

<xmp>
@verbatim
export default {
    data() {
      return {
        checkedNames: []
      }
    }
}

<div>Checked names: {{ checkedNames }}</div>

<input type="checkbox" id="jack" value="Jack" v-model="checkedNames" />
<label for="jack">Jack</label>

<input type="checkbox" id="john" value="John" v-model="checkedNames" />
<label for="john">John</label>

<input type="checkbox" id="mike" value="Mike" v-model="checkedNames" />
<label for="mike">Mike</label>
@endverbatim
</xmp>

<strong>#4: Radio</strong><br />

<xmp>
@verbatim
<div>Picked: {{ picked }}</div>

<input type="radio" id="one" value="One" v-model="picked" />
<label for="one">One</label>

<input type="radio" id="two" value="Two" v-model="picked" />
<label for="two">Two</label>
@endverbatim
</xmp>

<strong>#5: Select</strong><br />

<xmp>
@verbatim
<div>Selected: {{ selected }}</div>

<select v-model="selected">
  <option disabled value="">Please select one</option>
  <option>A</option>
  <option>B</option>
  <option>C</option>
</select>
@endverbatim
</xmp>

<strong>#6: Multiple select (bound to array):</strong><br />

<xmp>
@verbatim
<div>Selected: {{ selected }}</div>

<select v-model="selected" multiple>
  <option>A</option>
  <option>B</option>
  <option>C</option>
</select>
@endverbatim
</xmp>

<strong>#7: Value Bindings</strong><br />

<xmp>
@verbatim
<!-- `picked` is a string "a" when checked -->
<input type="radio" v-model="picked" value="a" />

<!-- `toggle` is either true or false -->
<input type="checkbox" v-model="toggle" />

<!-- `selected` is a string "abc" when the first option is selected -->
<select v-model="selected">
  <option value="abc">ABC</option>
</select>
@endverbatim
</xmp>

<strong>#8: Checkbox</strong><br />

<xmp>
@verbatim
<input
  type="checkbox"
  v-model="toggle"
  :true-value="dynamicTrueValue"
  :false-value="dynamicFalseValue" />
@endverbatim
</xmp>

<strong>#9: Radio</strong><br />

<xmp>
@verbatim
<input type="radio" v-model="pick" :value="first" />
<input type="radio" v-model="pick" :value="second" />
@endverbatim
</xmp>

<strong>#10: Select Options </strong><br />

<xmp>
@verbatim
<select v-model="selected">
<!-- inline object literal -->
<option :value="{ number: 123 }">123</option>
</select>
@endverbatim
</xmp>

<strong>#11: Modifiers - .lazy</strong><br />

<xmp>
@verbatim
<!-- synced after "change" instead of "input" -->
<input v-model.lazy="msg" />
@endverbatim
</xmp>

<strong>#12: .number</strong><br />

<xmp>
@verbatim
<input v-model.number="age" />
@endverbatim
</xmp>

<strong>#13: .trim</strong><br />

<xmp>
@verbatim
<input v-model.trim="msg" />
@endverbatim
</xmp>

<strong>#14: v-model with Components </strong><br />

<xmp>
@verbatim
If you're not yet familiar with Vue's components, you can skip this for now.

HTML's built-in input types won't always meet your needs. Fortunately, Vue components allow you to build reusable inputs with completely customized behavior. These inputs even work with v-model! To learn more, read about Usage with v-model in the Components guide.
@endverbatim
</xmp>

@endsection