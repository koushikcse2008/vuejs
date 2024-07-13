@extends('layouts.common')

@section('title', 'Style Binding Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Style Binding Process:</h3>

<strong>#1: Binding Inline Styles</strong><br />

<xmp>
@verbatim
data() {
    return {
        activeColor: 'red',
        fontSize: 30
    }
}

<div :style="{ color: activeColor, fontSize: fontSize + 'px' }"></div>

<div :style="{ 'font-size': fontSize + 'px' }"></div>

data() {
    return {
      styleObject: {
        color: 'red',
        fontSize: '13px'
      }
    }
}

<div :style="styleObject"></div>
@endverbatim
</xmp>


<strong>#2: Binding to Arrays</strong><br />

<xmp>
@verbatim
<div :style="[baseStyles, overridingStyles]"></div>
@endverbatim
</xmp>

<strong>#3: Multiple Values</strong><br />

<xmp>
@verbatim
<div :style="{ display: ['-webkit-box', '-ms-flexbox', 'flex'] }"></div>
@endverbatim
</xmp>

@endsection