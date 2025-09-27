<x-forum.layouts.app>
  <section class="flex flex-col bg-accent text-white">
    @foreach ($blogs as $blog)
      <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-1 p-4">
          <a class="text-xl hover:underline" href="/blogs/{{ $blog->id }}">
            {{ $blog->name }}
          </a>
          <p class="text-white/40">{{ $blog->content }}</p>
          <span class="text-sm">
            {{ $blog->user->name }} | {{ $blog->created_at->diffForHumans() }}
          </span>
        </div>
        <hr>
      </div>
    @endforeach
  </section>
</x-forum.layouts.app>