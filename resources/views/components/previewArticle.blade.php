@for ($i = 0; $i < 10; $i++)
    <article class="preview-article-container-global">
        <aside>
            <a href="#" class="preview-article-author">{{ $author }}</a>
            <span class="preview-article-category">{{ $category }}</span>
        </aside>
        <a class="preview-article-link" href="{{ route('article') }}">
            <div class="preview-article-container">
                <header class="preview-article-header">
                    <img src="{{ $authorThumbnail  }}" alt="Picture of author thumbnail">
                    <span class="preview-article-title">{{ $title  }}</span>
                </header>
                <aside>
                    <img class="preview-article-picture" src="{{ $picturePath }}" alt="">
                </aside>
                <p class="preview-article-content">
                    {{ $text }}
                </p>
            </div>
        </a>
    </article>
@endfor
