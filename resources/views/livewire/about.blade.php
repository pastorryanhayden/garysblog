<div class="w-full shadow-sm mb-12">
<div class="bg-white w-full p-12">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold font-serif mb-6">{{$settings->about_title}}</h1>
        <p class="mb-6 text-lg">{{$settings->about_description}}</p>
        <img src="{{$settings->about_image ? Storage::url($settings->about_image) : ''}}" class="w-full max-w-2xl h-96 object-contain mb-12" />
        <div class="prose mb-6">
            {!! $settings->body !!}
        </div>
    </div>
    </div>
</div>
