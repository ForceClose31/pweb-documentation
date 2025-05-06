<h2>Mata Pelajaran dan Guru di Setiap Kelas</h2>
@foreach ($classes as $class)
    <h3>Kelas: {{ $class->name }}</h3>
    <ul>
        @foreach ($class->classSubjectTeachers as $item)
            <li>{{ $item->subject->name }} - Guru: {{ $item->teacher->name }}</li>
        @endforeach
    </ul>
@endforeach
