<nav class="flex items-center justify-between h-16 *:text-white">
  <div>
    <a href="{{ route('home') }}" class="hover:underline">
      <x-forum.logo />
    </a>
  </div>

  <div class="flex gap-4">
    <a href="{{ route('questions.index') }}" class="text-sm font-semibold hover:underline flex gap-1">
      <x-forum.logos.blog-logo class="h-5" />
      Foro</a>
    <a href="/blogs" class="text-sm font-semibold hover:underline flex gap-1">
      <x-forum.logos.blog-logo class="h-5" />
      Blog</a>
  </div>

  <div>
    <a href="#" class="text-sm font-semibold hover:underline">Log in &rarr;</a>
  </div>
</nav>