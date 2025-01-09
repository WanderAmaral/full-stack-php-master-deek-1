@extends('layouts.site')

@section('content')

    <main class="container my-5">
        <section class="text-center">
            <h2 class="mb-5">{{ $about->title_topics }}</h2>
            <p class="mb-5">{{ $about->subtitle_topics }}</p>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card shadow border-light">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $about->title_topic_one }}</h5>
                            <p class="card-text">{{ $about->description_topic_one }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-light">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $about->title_topic_two }}</h5>
                            <p class="card-text">{{ $about->description_topic_two }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-light">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $about->title_topic_three }}</h5>
                            <p class="card-text">{{ $about->description_topic_three }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
