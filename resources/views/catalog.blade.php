@extends('component.wrapper')

@section('content')

<main class="main-content">

    <livewire:catalog />

</main>

@endsection

@section('css')
<meta property="og:image" content="{{env('APP_URL')}}/assets/images/tm.png" />
@endsection