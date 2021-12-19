@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 justify-content-between">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold text-primary text-2xl">Peserta Vaksin</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table_participant" class="table" width="100%">
                        <thead>
                            <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Vaksin</th>
                          <th>Vaksin Dosis</th>
                          <th>Umur</th>
                          <th>Jadwal</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @forelse($items as $item)
                          <tr>
                              <td>{{ $item->nik }}</td>
                              <td>{{ $item->fullname }}</td>
                              <td>{{ $item->vaccines->name }}</td>
                              <td>{{ $item->vaccine_doses }}</td>
                              
                              <td>{{ Carbon\Carbon::parse($item->date_of_birth )->diff(\Carbon\Carbon::now())->format('%y') }}</td>
                              <td>
                                @if ($item->schedules == null)
                                    Jadwal Belum Ditentukan
                                @else
                                    {{ Carbon\Carbon::parse($item->schedules->vaccine_date)->format('d-m-Y') }}
                                @endif
                            </td>
                              <td>
                                <a href="http://wa.me/62{{ $item->phone_number }}" class="btn btn-success">
                                    <i class="fas fa-phone"></i>
                                </a>
                                <a href="{{ route('add-schedule', $item->id) }}" class="btn btn-info">
                                    <i class="fas fa-calendar"></i>
                                </a>
                                  <form action="{{ route('participant.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>
                                  

                              </td>
                              
                          </tr>
                      @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('scripts')
   <script>
    $(document).ready(function() {
        $('#table_participant').DataTable(

        );
    });
    </script>
@endsection
