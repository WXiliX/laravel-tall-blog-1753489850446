<div>
    <div class="mb-4 flex justify-between items-center">
        <div class="flex space-x-4">
            <input 
                type="text" 
                wire:model.live="search" 
                placeholder="Search posts..." 
                class="border rounded px-3 py-2"
            >
        </div>
        <a href="{{ route('posts.create') }}" class="btn">
            Create Post
        </a>
    </div>

    <div class="space-y-4">
        @forelse($posts as $post)
            <div class="border rounded-lg p-6 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-semibold">
                        <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:text-blue-800">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <span class="text-sm text-gray-500">
                        {{ $post->created_at->format('M j, Y') }}
                    </span>
                </div>
                
                @if($post->excerpt)
                    <p class="text-gray-600 mb-2">{{ $post->excerpt }}</p>
                @endif
                
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>By {{ $post->user->name }}</span>
                    <div class="flex space-x-2">
                        @foreach($post->categories as $category)
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-center py-8">No posts found.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
