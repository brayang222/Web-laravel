{{ $question->title }}

<p>{{ $question->description }}</p>


@foreach ($question->answer as $answer)

  <p> {{ $answer }}</p>
@endforeach