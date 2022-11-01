@extends('component.wrapper')

@section('content')

<main class="main-content">

    <livewire:catalog />

</main>

@endsection

@section('css')
<meta property="og:image" content="{{env('APP_URL')}}/assets/images/tm.png" />
<meta property="og:site_name" content="Diarika Beauty - Catalog" />
<title>Diarika Beauty - Catalog</title>
<meta property="og:title" content="Diarika Beauty - Catalog" />
@endsection