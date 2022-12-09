@extends('layouts.admin.index')

@section('content')
<div class="col-lg-12 col-md-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Laporan</h4>
            <div class="data-tables datatable-primary">
                <table class="table table-hover" id="dataTable2">
                    <thead class="text-capitalize">
                        <tr style="text-align:center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach($laporan as $data)
                        <tr style="text-align:center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>{{ $data->updated_at }}</td>
                            <td>
                                <br>
                                <button type="button" title="Edit Data" data-toggle="modal" data-target=".bd-example-modal-md-{{ $data->id }}" class="btn btn-warning btn-rounded"><i class="ti-pencil-alt"></i></button>
                                <br><br>
                                <form action="{{ route('laporan.destroy', $data) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-rounded btn-danger" title="Hapus Data" onclick="return confirm('Apa anda yakin akan menghapusnya?')"><i class="ti-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @include('admin.laporan.edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection