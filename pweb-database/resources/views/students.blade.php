<h2>Daftar Siswa dan Kelas</h2>
<ul>
@foreach ($students as $student)
    <li>
        {{ $student->name }} ({{ $student->email }})
        <ul>
            @foreach ($student->classes as $class)
                <li>Kelas: {{ $class->name }}</li>
            @endforeach
        </ul>
    </li>
@endforeach
</ul>
