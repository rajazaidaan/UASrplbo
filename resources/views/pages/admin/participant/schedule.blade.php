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
                <form action="{{ route('schedule.store') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="participant_id">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" value="{{ $item->fullname }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="vaccine_date">Jadwal Vaksin</label>
                        <input type="date" class="form-control" name="vaccine_date">
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
