<div class="bg-white shadow-sm w-full p-12 mb-12">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold font-serif mb-6">{{$item->title}}</h1>
        <img src="{{$item->image ? Storage::url($item->image) : ''}}" class="w-full max-w-2xl" />
        <div class="prose">
            {!! $item->markdown !!}
        </div>
    </div>
</div>
