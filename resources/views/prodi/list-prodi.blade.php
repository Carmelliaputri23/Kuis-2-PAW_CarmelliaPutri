<x-layout>

    <div class="container mt-4">

        {{-- ALERT --}}
        @if (session('success'))

            <div class="alert alert-success border-0 rounded-4 shadow-sm d-flex align-items-center justify-content-between mb-4">

                <div>
                    ✨ {{ session('success') }}
                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- HEADER --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

            <div>

                <h2 class="fw-bold text-dark mb-1">
                    📚 List Program Studi
                </h2>

                <p class="text-muted mb-0">
                    Data seluruh program studi universitas
                </p>

            </div>


            <a href="{{ route('prodi.create') }}"
               class="btn btn-dark rounded-4 px-4 py-3 fw-semibold shadow-sm">

                + Tambah Prodi

            </a>

        </div>


        {{-- CARD --}}
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table align-middle mb-0 custom-table">

                        <thead>

                            <tr>

                                <th width="5%">
                                    No
                                </th>

                                <th>
                                    Nama Prodi
                                </th>

                                <th>
                                    Nama Kaprodi
                                </th>

                                <th>
                                    Alias
                                </th>

                                <th class="text-center" width="30%">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse ($prodis as $item)

                                <tr>

                                    <td class="fw-semibold text-muted">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>

                                        <div class="fw-bold text-dark">
                                            {{ $item->nama_prodi }}
                                        </div>

                                    </td>

                                    <td class="text-muted">
                                        {{ $item->nama_kaprodi }}
                                    </td>

                                    <td>

                                        <span class="badge custom-badge">

                                            {{ $item->alias_prodi }}

                                        </span>

                                    </td>

                                    <td>

                                        <div class="d-flex justify-content-center flex-wrap gap-2">

                                            {{-- DETAIL --}}
                                            <a href="{{ route('prodi.show', $item->id) }}"
                                               class="btn btn-light border rounded-3 px-3">

                                                👁 Detail

                                            </a>


                                            {{-- EDIT --}}
                                            <a href="{{ route('prodi.edit', $item->id) }}"
                                               class="btn btn-dark rounded-3 px-3">

                                                ✏ Edit

                                            </a>


                                            {{-- DELETE --}}
                                            <form action="{{ route('prodi.destroy', $item->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-outline-danger rounded-3 px-3">

                                                    🗑 Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5"
                                        class="text-center py-5 text-muted">

                                        Data program studi belum tersedia

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="card-footer bg-white border-top text-center py-4">

                <small class="text-muted">
                    Sistem Informasi Program Studi
                </small>

            </div>

        </div>

    </div>


    {{-- STYLE --}}
    <style>

        .custom-table thead{
            background:#f9fafb;
        }

        .custom-table thead th{
            padding:20px;
            border:none;
            font-size:14px;
            color:#6b7280;
            font-weight:600;
        }

        .custom-table tbody td{
            padding:20px;
            border-top:1px solid #f1f5f9;
            vertical-align:middle;
        }

        .custom-table tbody tr{
            transition:.2s;
        }

        .custom-table tbody tr:hover{
            background:#fafafa;
        }

        .custom-badge{
            background:#f3f4f6;
            color:#111827;
            padding:10px 14px;
            border-radius:12px;
            font-size:13px;
            font-weight:600;
        }

        .btn-dark{
            background:#111827;
            border:none;
        }

        .btn-dark:hover{
            background:#000;
        }

        .card{
            background:#fff;
        }

    </style>

</x-layout>