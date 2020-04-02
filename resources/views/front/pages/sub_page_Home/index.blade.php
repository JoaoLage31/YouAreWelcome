@extends('front.layout.app_menu_2')

@section('content')

@include('front.pages.sub_page_Home.partials.slider', ['data'=>$result])

@php
$form_title = ['0'=>
    [
    'items'=>[ [
        'title'=>'Have an important question? Fill out the form below to get a quick response from a real representative.',
]
    ]]];
@endphp

@include('front.pages.sub_page_Home.partials.form', ['data'=>$form_title])


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