{{--{{ dump($enrollments) }}--}}

<ul>
    @foreach ($enrollments as $enrollment)
        <li>This is enrollment {{ $enrollment->id }}</li>
    @endforeach
</ul>