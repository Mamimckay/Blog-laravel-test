<x-layout>
<div class="space-y-10 md:space-y-16">
    {{-- Début du post --}}
    @foreach ($posts as $post)
    <x-post :$post list />
    @endforeach
    {{-- Fin du post --}}
</div>
{{ $posts->links() }}
</x-layout>
