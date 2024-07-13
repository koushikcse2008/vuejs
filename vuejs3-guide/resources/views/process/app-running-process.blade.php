@extends('layouts.common')

@section('title', 'App Running Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the App Running Process:</h3>

<strong>#Step 1: To run the app, use the below commands within your project folder: </strong><br />

<xmp>
@verbatim
$npm install
$npm run dev

After you run the app, you will see the below screen:
@endverbatim
</xmp>

<img src="{{ asset('frontend/images/installation.jpg') }}" alt="installation guide" />
<br />

@endsection