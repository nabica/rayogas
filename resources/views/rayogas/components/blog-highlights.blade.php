<section class='highlights'>
    <div class="highlights__header">
        <h3>Últimas Noticias</h3>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            @foreach($randomBlogPosts as $randomBlogPost)
            <a href="{{$randomBlogPost->link}}" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{ isset($randomBlogPost->thumb_image) ? asset($randomBlogPost->thumb_image_url) : asset('images/web/blog/img_blog_preview_1.png') }}"
                    alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>{{ Str::limit($randomBlogPost->title, 100, $end = '...') }}</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">{{ $randomBlogPost->excerpt_description }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>