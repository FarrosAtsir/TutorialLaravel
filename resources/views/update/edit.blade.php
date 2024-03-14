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

    {{-- add data --}}
    <form action="/update/{{ $siswa->id }}" method="POST">
        <div class="flex justify-center">
            @csrf
            @method('put')
            <label class="form-control w-full max-w-xs mt-16">
                <div class="label block">
                    <span class="label-text">Nama :</span>
                </div>
                <input type="text" name="nama" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="{{ $siswa->nama }}"/>                
                <div class="label block">
                    <span class="label-text">Asal :</span>
                </div>
                <input type="text" name="asal" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="{{ $siswa->asal }}"/>
                <div class="label block">
                    <span class="label-text">Kelas :</span>
                </div>
                <input type="text" name="Kelas" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="{{ $siswa->Kelas }}"/>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </label>
        </div>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>