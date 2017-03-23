<div class="container-fluid">
    <section class="posts">

        @each('canvas::frontend.blog.partials.post', $posts, 'post', 'canvas::frontend.blog.partials.post-empty')

    </section>
</div>