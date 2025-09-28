<x-forum.layouts.app>
  <section class="flex flex-col w-full justify-center mt-15 gap-2">
    <h3 class="text-3xl text-center">
      {{ $blog->name }}
    </h3>
    <div class="w-full flex text-center">
      <p class="text-white/50  text-center">{{ $blog->content }}</p>
    </div>
    <div class="flex w-full text-center justify-evenly mt-10">
      <p>{{ $blog->user->name }}</p>
      <p>{{ $blog->created_at->diffForHumans() }}</p>
    </div>
    <livewire:comment :commentable="$blog" />
  </section>

</x-forum.layouts.app>