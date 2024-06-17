<div class="w-full shadow-sm mb-12">
<div class="bg-white w-full p-12">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-xl md:text-3xl font-bold font-serif mb-6"><a href="/blog/{{$item->slug}}">{{$item->title}}</a></h1>
        <img src="{{$item->image ? Storage::url($item->image) : ''}}" class="w-full max-w-2xl mb-12" />
        <div class="prose-sm md:prose mb-6">
            {!! $item->markdown !!}
        </div>
        <a href="/blog/{{$item->slug}}" class="text-lg underline font-bold">Read More</a>
    </div>
    </div>
    <div class="w-full p-6 bg-gray-200 flex items-center justify-center">
        <p class="text-xs">Published On: {{$item->created_at->format('F j, Y')}} • {{$item->categories->count() > 1 ? 'Categories:' : 'Category:'}} @foreach($item->categories as $category)@if($loop->last){{$category->name}}@else {{$category->name . ', '}}@endif @endforeach</p>
    </div>
</div>
