<div class="w-full shadow-sm mb-12">
<div class="bg-white w-full p-12">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold font-serif mb-6">{{$post->title}}</h1>
        <img src="{{$post->image ? Storage::url($post->image) : ''}}" class="w-full max-w-2xl mb-12" />
        <div class="prose mb-6">
            {!! $post->markdown !!}
        </div>
    </div>
    </div>
    <div class="w-full p-6 bg-gray-200 flex items-center justify-center">
        <p class="text-xs">Published On: {{$post->created_at->format('F j, Y')}} • {{$post->categories->count() > 1 ? 'Categories:' : 'Category:'}} @foreach($post->categories as $category)@if($loop->last){{$category->name}}@else {{$category->name . ', '}}@endif @endforeach</p>
    </div>
</div>
