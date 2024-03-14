@php
    $no=1;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- navbar --}}
    <div class="navbar bg-primary text-primary-content">
        <button class="btn btn-ghost text-xl">Tutorial CRUD Laravel</button>
    </div>

    {{-- table of data --}}
    <div class="overflow-x-auto p-16">
      <a href="/add" class="btn btn-primary mb-4">Add</a>
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Asal</th>
              <th>Kelas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($siswa as $s)
            <tr>
                <th>{{ $no }}</th>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->asal }}</td>
                <td>{{ $s->Kelas }}</td>
                <td class="flex">
                  <a href="/{{ $s->id }}/edit" class="btn btn-outline btn-accent mr-1">Edit</a>
                  <form action="/update/{{ $s->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline btn-error">Delete</button>                  </form>
                </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
          </tbody>
        </table>
      </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>