<x-forum.layouts.app>

  {{ $question->title }}

  <p>{{ $question->description }}</p>


  @foreach ($question->answer as $answer)

    <p> {{ $answer }}</p>
  @endforeach

</x-forum.layouts.app>