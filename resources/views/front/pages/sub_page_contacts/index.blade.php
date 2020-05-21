@extends('front.layout.app_menu_2')

@section('content')

@php
    $result = ['0'=>
    [
    'items'=>[[
        'title'=>'Have any inquiry and have some feedback for us? ',
        'subtitle'=>'Contact Us',
    ]  
    ]]];
@endphp

@include('front.pages.sub_page_contacts.partials.intro_contacts', ['data'=>$result])

@include('front.pages.sub_page_contacts.partials.form')

@include('front.pages.home.partials.section-3',[
    'title_section'=>'You Are Welcome!',
    'sub_title_section'=>'Creating strong partnerships.',
])
@endsection

@push('scripts')
<script>
    $(document).ready(function() { 
        AOS.init({
            once: true,
            duration: 1200
        })
     });
</script>
@endpush
