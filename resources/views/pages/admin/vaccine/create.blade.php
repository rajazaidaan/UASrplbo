@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3 justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Vaksin</h3>
            </div>

            <div class="card-body">
                <!-- Content Row -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('vaccine.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama Vaksin</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama Vaksin"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Vaksin Tersedia</label>
                        <input type="number" class="form-control" name="amount" placeholder="Jumlah Vaksin Tersedia"
                            value="{{ old('amount') }}">
                    </div>
                    <div class="form-group">
                        <label class="font-semibold" for="doses">Dosis Vaksin</label>
                        <select name="doses" id="doses" class="form-control">
                            <option value="">Pilih Dosis</option>
                            <option class="text-black" value="1">
                                1
                            </option>
                            <option class="text-black" value="2">
                                2
                            </option>
                            <option class="text-black" value="3">
                                3
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
