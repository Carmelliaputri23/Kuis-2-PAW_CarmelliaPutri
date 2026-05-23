<x-layout>

    <div class="container mt-4">

        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- HEADER --}}
                    <div class="p-5 border-bottom bg-white">

                        <h2 class="fw-bold text-dark mb-2">
                            ✏ Edit Program Studi
                        </h2>

                        <p class="text-muted mb-0">
                            Perbarui informasi program studi dengan data terbaru
                        </p>

                    </div>


                    {{-- BODY --}}
                    <div class="card-body p-5 bg-white">

                        {{-- ERROR --}}
                        @if ($errors->any())

                            <div class="alert alert-danger border-0 rounded-4">

                                <ul class="mb-0 ps-3">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- FORM --}}
                        <form action="{{ route('prodi.update', $prodi->id) }}"
                              method="POST">

                            @csrf
                            @method('PUT')


                            {{-- NAMA PRODI --}}
                            <div class="mb-4">

                                <label
                                    for="nama_prodi"
                                    class="form-label fw-semibold text-dark">

                                    Nama Prodi

                                </label>

                                <input
                                    type="text"
                                    id="nama_prodi"
                                    name="nama_prodi"
                                    class="form-control custom-input @error('nama_prodi') is-invalid @enderror"
                                    placeholder="Masukkan nama prodi"
                                    value="{{ old('nama_prodi', $prodi->nama_prodi) }}">

                            </div>


                            {{-- KAPRODI --}}
                            <div class="mb-4">

                                <label
                                    for="nama_kaprodi"
                                    class="form-label fw-semibold text-dark">

                                    Nama Kaprodi

                                </label>

                                <input
                                    type="text"
                                    id="nama_kaprodi"
                                    name="nama_kaprodi"
                                    class="form-control custom-input @error('nama_kaprodi') is-invalid @enderror"
                                    placeholder="Masukkan nama kaprodi"
                                    value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}">

                            </div>


                            {{-- ALIAS --}}
                            <div class="mb-5">

                                <label
                                    for="alias_prodi"
                                    class="form-label fw-semibold text-dark">

                                    Pilih Alias Prodi

                                </label>

                                @php
                                    $currentAlias = old('alias_prodi', $prodi->alias_prodi);
                                @endphp

                                <select
                                    name="alias_prodi"
                                    id="alias_prodi"
                                    class="form-select custom-input @error('alias_prodi') is-invalid @enderror">

                                    <option value="SI"
                                        {{ $currentAlias == 'SI' ? 'selected' : '' }}>

                                        Sistem Informasi

                                    </option>

                                    <option value="TI"
                                        {{ $currentAlias == 'TI' ? 'selected' : '' }}>

                                        Teknik Informatika

                                    </option>

                                    <option value="SK"
                                        {{ $currentAlias == 'SK' ? 'selected' : '' }}>

                                        Sistem Komputer

                                    </option>

                                </select>

                            </div>


                            {{-- BUTTON --}}
                            <div class="d-flex gap-3">

                                <a href="{{ route('prodi.index') }}"
                                   class="btn btn-light border rounded-4 px-4 py-3 fw-semibold flex-fill">

                                    ← Kembali

                                </a>

                                <button
                                    type="submit"
                                    class="btn btn-dark rounded-4 px-4 py-3 fw-semibold flex-fill">

                                    💾 Update Data

                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- FOOTER --}}
                    <div class="card-footer bg-white border-top text-center py-4">

                        <small class="text-muted">
                            Sistem Informasi Program Studi
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- STYLE --}}
    <style>

        .custom-input{
            border-radius:16px;
            border:1px solid #e5e7eb;
            padding:14px 18px;
            font-size:15px;
            transition:.3s;
            box-shadow:none!important;
        }

        .custom-input:focus{
            border-color:#111827;
            box-shadow:0 0 0 4px rgba(17,24,39,0.08)!important;
        }

        .btn-dark{
            background:#111827;
            border:none;
            transition:.3s;
        }

        .btn-dark:hover{
            background:#000;
            transform:translateY(-2px);
        }

        .btn-light{
            background:#f9fafb;
            transition:.3s;
        }

        .btn-light:hover{
            background:#f3f4f6;
            transform:translateY(-2px);
        }

        .card{
            background:#fff;
        }

    </style>

</x-layout>