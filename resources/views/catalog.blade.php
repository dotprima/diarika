@extends('component.wrapper')

@section('content')
    <main class="main-content">

        <livewire:catalog />

    </main>
@endsection

@section('css')
    <meta property="og:image" content="{{ env('APP_URL') }}/assets/images/tm.png" />
    <meta property="og:site_name" content="Diarika Beauty - Catalog" />
    <title>Product - Diarika Beauty</title>
    <meta property="og:title" content="Catalog - Diarika Beauty Glow up your skin. Find your truly beauty" />
    <meta name="description"
        content="Dapatkan beragam produk kecantikan berkualitas dari Diarika Beauty. Temukan produk-produk perawatan kulit, kosmetik, dan banyak lagi. Kunjungi kami di Jalan Raya Tanjungmulya No.384 Panumbangan Ciamis Jawa Barat."
        itemprop="description" />
    <meta name="originalTitle" content="Diarika Beauty - Produk" />
    <meta property="og:description"
        content="Dapatkan beragam produk kecantikan berkualitas dari Diarika Beauty. Temukan produk-produk perawatan kulit, kosmetik, dan banyak lagi. Kunjungi kami di Jalan Raya Tanjungmulya No.384 Panumbangan Ciamis Jawa Barat." />
    <meta
        content="Dapatkan beragam produk kecantikan berkualitas dari Diarika Beauty. Temukan produk-produk perawatan kulit, kosmetik, dan banyak lagi. Kunjungi kami di Jalan Raya Tanjungmulya No.384 Panumbangan Ciamis Jawa Barat." />
    <meta name="twitter:description"
        content="Dapatkan beragam produk kecantikan berkualitas dari Diarika Beauty. Temukan produk-produk perawatan kulit, kosmetik, dan banyak lagi. Kunjungi kami di Jalan Raya Tanjungmulya No.384 Panumbangan Ciamis Jawa Barat." />
@endsection
