@extends('admin.main')

@section('title', '| Klinik Sentosa')

@section('content')
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Articles</h1>
            <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>

        <div class="row">
            <div class="col-sm-8 blog-main">

                @if( $posts->count() )
                    @foreach( $posts as $post )

                        <div class="blog-post">
                            <h2 class="blog-post-title">
                                <a href="/disease/{{ $post->post_slug }}">{{ $post->post_title }}</a>
                            </h2>
                            <p class="blog-post-meta">{{ date('M j, Y', strtotime( $post->created_at )) }} by <a href="#">{{ Helper::get_userinfo( $post->author_ID )->name }}</a></p>

                            <div class="blog-content">
                                {!! nl2br( $post->post_content ) !!}
                            </div>
                        </div>

                    @endforeach
                @else

                    <p>No post added yet!</p>

                @endif

                {{-- Display pagination only if more than the required pagination --}}
                {{--  @if( $posts->total() > 6 )
                    <nav>
                        <ul class="pager">
                            @if( $posts->firstItem() > 1 )
                                <li><a href="{{ $posts->previousPageUrl() }}">Previous</a></li>
                            @endif

                            @if( $posts->lastItem() < $posts->total() )
                                <li><a href="{{ $posts->nextPageUrl() }}">Next</a></li>
                            @endif
                        </ul>
                    </nav>
                @endif  --}}

                <br>

                <div>
                    {!! $posts->render() !!}
                </div>

            </div><!-- /.blog-main -->

            <!--Sidebar-->
            @include('admin.partials._sidebar')

        </div>
    </div>
@endsection
