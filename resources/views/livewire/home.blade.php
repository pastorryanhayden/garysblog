<div>
@foreach($posts as $post)
    <livewire:blog.item item="{{$post->id}}" />
@endforeach
<div>
