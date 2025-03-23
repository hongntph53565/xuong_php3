<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Thêm User</h1>
        <form action="{{ route('users.addPostUser') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Tên nhân sự</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email nhân sự</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phongban">Phòng ban</label>
                <select name="phongban" id="phongban" class="form-control">
                    @foreach ($phongban as $value)
                        <option value="{{ $value->id }}">{{ $value->ten_donvi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tuoi">Tuổi nhân sự</label>
                <input type="number" id="tuoi" name="tuoi" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Thêm mới</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
