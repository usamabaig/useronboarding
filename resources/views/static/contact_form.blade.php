@extends('layouts.app')

@section('title', 'Contact us')

@section('cssSection')
@endsection

@section('content')
<div id="contactForm">
    <contact-form></contact-form>
</div>
@endsection

@section('scriptsSection')
<script src="/js/components/contact_form/contact_form.js"></script>
@endsection
