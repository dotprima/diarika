@extends('component.wrapper')

@section('content')

<main class="main-content">

    <livewire:catalog />

</main>

@endsection

@section('css')
<meta property="og:image" content="{{env('APP_URL')}}/assets/images/FPK202206212-removebg-preview.png" />
@endsection