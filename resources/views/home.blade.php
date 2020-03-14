@extends('layouts.app')

@section('content')
    <section id="all-preview-articles">
        @component('components.previewArticle')
            @slot('authorThumbnail')
                https://www.planet.fr/files/styles/pano_xxl/public/images/diaporama/9/5/7/629759/1740205-inline.jpg?itok=QylEfldv
            @endslot
            @slot('author')
                John Doe
            @endslot
            @slot('title')
                10 conseils pour réussir la rédaction d’un article de blog
            @endslot
            @slot('text')
                Le blog est une section de votre site à ne pas négliger. La plupart du temps, il sert à diffuser des
                articles – même si d’autres formes de contenu peuvent être exploitées – afin d’éduquer les lecteurs sur
                un
                sujet plus ou moins précis.
            @endslot
            @slot('category')
                redaction
            @endslot
            @slot('picturePath')
                https://www.redacteur.com/blog/wp-content/uploads/2019/02/reussir-redaction-article-blog-740x522.jpg
            @endslot
        @endcomponent
    </section>
@endsection
