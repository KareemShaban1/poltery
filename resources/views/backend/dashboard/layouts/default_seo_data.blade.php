@php
    $metaData = App\Models\MetaData::pluck('value', 'key')->toArray(); // Populate the $metaData property
@endphp

@section('title', 'المصاعد الدولية')

<meta content="{{ $metaData['description'] }}" name="description">
<meta content="{{ $metaData['keywords'] }}" name="keywords">

<!-- Add a canonical tag to specify the preferred version of the page -->
<link rel="canonical" href="{{ $metaData['canonical_link'] }}">

<!-- Add Open Graph metadata for social media sharing -->
<meta property="og:title" content="{{ $metaData['og:title'] }}">
<meta property="og:description" content="{{ $metaData['og:description'] }}">
<meta property="og:url" content="{{ $metaData['og:url'] }}">
<meta property="og:type" content="{{ $metaData['og:type'] }}"> 
<meta property="og:site_name" content="{{ $metaData['og:site_name'] }}">
<meta property="og:updated_time" content="{{ $metaData['og:updated_time'] }}">
<meta property="og:image" content="{{ $metaData['og:image'] }}">
<meta property="og:image:secure_url" content="{{ $metaData['og:image:secure_url'] }}">
<meta property="og:image:width" content="{{ $metaData['og:image:width'] }}">
<meta property="og:image:height" content="{{ $metaData['og:image:height'] }}">
<meta property="og:image:alt" content="{{ $metaData['og:image:alt'] }}">
<meta property="og:image:type" content="{{ $metaData['og:image:type'] }}">
<meta property="article:publisher" content="{{ $metaData['article:publisher'] }}">
<meta property="article:published_time" content="{{ $metaData['article:published_time'] }}">
<meta property="article:modified_time" content="{{ $metaData['article:modified_time'] }}">

<!-- Add Twitter Card metadata for Twitter sharing -->
<meta name="twitter:card" content="{{ $metaData['twitter:card'] }}">
<meta name="twitter:title" content="{{ $metaData['twitter:title'] }}">
<meta name="twitter:description" content="{{ $metaData['twitter:description'] }}">
<meta name="twitter:image" content="{{ $metaData['twitter:image'] }}">
