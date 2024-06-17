<div class="p-6">
@foreach($posts as $post)
    <livewire:blog.item item="{{$post->id}}" />
@endforeach
{{$posts->links()}}
<div>
