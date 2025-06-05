<div class="card bg-base-100 shadow-xl border border-base-200">
    @if($post->displayImage)
        <figure class="px-4 pt-4">
            <img src="{{ $post->displayImage }}" alt="Post image" class="rounded-xl max-h-60 object-cover w-full" />
        </figure>
    @endif
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        @if(isset($full) && $full)
            <p class="whitespace-pre-line">{!! nl2br($post->body) !!}</p>
        @else
            <p>{{ $post->snippet }}</p>
        @endif

        <div class="flex flex-wrap gap-2 mt-2 text-sm">
            <span class="badge badge-outline badge-primary">{{ $post->user->name }}</span>
            <span class="badge badge-outline">💬 {{ $post->comments_count }}</span>
            <span class="badge badge-outline">👍 {{ $post->likes_count }}</span>
            <span class="text-xs text-neutral-content ml-auto">{{ $post->created_at->diffForHumans() }}</span>
        </div>

        <div class="card-actions justify-end mt-4">
            @if(!isset($full) || !$full)
                <a class="btn btn-primary" href="{{ route('post', ['post' => $post]) }}">Read more</a>
            @endif
        </div>
    </div>
</div>
