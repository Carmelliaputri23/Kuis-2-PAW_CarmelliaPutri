<x-layout>
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">List Fakultas</h2>

            <a href="/fakultas/create" class="btn btn-primary">
                + Tambah Fakultas
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">

                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th width="5%">No</th>
                            <th>Fakultas</th>
                            <th>Dekan</th>
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($fakultas as $item)
                            <tr>
                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->nama_fakultas }}
                                </td>

                                <td>
                                    {{ $item->nama_dekan }}
                                </td>

                                <td>
                                    <div class="d-flex gap-2">

                                        <a 
                                            href="/fakultas/{{ $item->id }}"
                                            class="btn btn-info btn-sm text-white"
                                        >
                                            Detail
                                        </a>

                                        <a 
                                            href="/fakultas/{{ $item->id }}/edit"
                                            class="btn btn-warning btn-sm"
                                        >
                                            Edit
                                        </a>

                                        <form 
                                            action="/fakultas/{{ $item->id }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button 
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                            >
                                                Hapus
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    Data fakultas belum tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>

    </div>
</x-layout>