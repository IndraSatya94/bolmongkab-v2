@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> Halaman</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.statik.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                @can('statiks.create')
                                <div class="input-group-prepend">
                                    <a href="{{ route('admin.statik.create') }}" class="btn btn-primary"
                                        style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                                </div>
                                @endcan
                                <input type="text" class="form-control" name="q" placeholder="cari berdasarkan nama">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                    <th scope="col">HALAMAN</th>
                                    <th scope="col">CAPTION</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">BODY</th>
                                    <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statiks as $no => $statik)
                                <tr>
                                    <th scope="row" style="text-align: center">
                                        {{ ++$no + ($statiks->currentPage()-1) * $statiks->perPage() }}</th>
                                    <td>{{ $statik->halaman }}</td>
                                    <td>{{ $statik->caption }}</td>
                                    <td class="text-center"><img src="/public/statik-images/{{ $statik->image }}" style="width: 100%"></td>
                                    <td>{{ $statik->body }}</td>
                                    <td class="text-center">
                                    @can('posts.edit')
                                            <a href="{{ route('admin.statik.edit', $statik->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan

                                        @can('posts.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $statik->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$statiks->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {


                    //ajax delete
                    jQuery.ajax({
                        url: "{{ route("admin.statik.index") }}/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop
