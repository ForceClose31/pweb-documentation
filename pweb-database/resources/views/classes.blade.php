<h2>Daftar Kelas dan Siswa</h2>
@foreach ($classes as $class)
    <h3>{{ $class->name }}</h3>
    <ul>
        @foreach ($class->students as $student)
            <li>{{ $student->name }} ({{ $student->email }})</li>
        @endforeach
    </ul>
@endforeach
