@extends('layouts.common')

@section('title', 'Installation Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Installation Process:</h3>

<strong>#Step 1: Execute the below commands:</strong><br />

<xmp>
@verbatim
$npm create vue@latest

Vue.js - The Progressive JavaScript Framework

√ Project name: ... vuejs3-guide
√ Add TypeScript? ... No / Yes
√ Add JSX Support? ... No / Yes
√ Add Vue Router for Single Page Application development? ... No / Yes
√ Add Pinia for state management? ... No / Yes
√ Add Vitest for Unit Testing? ... No / Yes
√ Add an End-to-End Testing Solution? » No
√ Add ESLint for code quality? ... No / Yes
√ Add Prettier for code formatting? ... No / Yes
√ Add Vue DevTools 7 extension for debugging? (experimental) ... No / Yes

Scaffolding project in C:\xampp\htdocs\vuejs3\vuejs3-guide...

Done. Now run:

$cd vuejs3-guide
$npm install
$npm run dev

@endverbatim
</xmp>
<br />

@endsection