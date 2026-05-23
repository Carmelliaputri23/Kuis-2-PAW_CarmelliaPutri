<x-layout>

    <div class="container mt-4">

        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- HEADER --}}
                    <div class="p-5 border-bottom bg-white">

                        <h2 class="fw-bold mb-2 text-dark">
                            Form Data Prodi
                        </h2>

                        <p class="text-muted mb-0">
                            Silakan isi data program studi dengan lengkap
                        </p>

                    </div>


                    {{-- BODY --}}
                    <div class="card-body p-5 bg-white">

                        {{-- ERROR --}}
                        @if ($errors->any())

                            <div class="alert alert-danger rounded-4 border-0">

                                <ul class="mb-0 ps-3">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- FORM --}}
                        <form action="{{ route('prodi.store') }}"
                              method="POST">

                            @csrf

                            {{-- NAMA PRODI --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold text-dark">
                                    Nama Prodi
                                </label>

                                <input
                                    type="text"
                                    name="nama_prodi"
                                    class="form-control custom-input"
                                    placeholder="Contoh: Sistem Informasi">

                            </div>


                            {{-- KAPRODI --}}
                            <div class="mb-4">

                                <label class="form-label fw-semibold text-dark">
                                    Nama Kaprodi
                                </label>

                                <input
                                    type="text"
                                    name="nama_kaprodi"
                                    class="form-control custom-input"
                                    placeholder="Contoh: Dr. Budi Santoso">

                            </div>


                            {{-- ALIAS --}}
                            <div class="mb-5">

                                <label class="form-label fw-semibold text-dark">
                                    Pilih Alias Prodi
                                </label>

                                <select
                                    name="alias_prodi"
                                    class="form-select custom-input">

                                    <option selected disabled>
                                        -- Pilih Alias --
                                    </option>

                                    <option value="SI">
                                        Sistem Informasi
                                    </option>

                                    <option value="IF">
                                        Informatika
                                    </option>

                                    <option value="MJ">
                                        Manajemen
                                    </option>

                                    <option value="AK">
                                        Akuntansi
                                    </option>

                                </select>

                            </div>


                            {{-- BUTTON --}}
                            <div class="d-grid">

                                <button
                                    type="submit"
                                    class="btn btn-dark rounded-4 py-3 fw-semibold">

                                    💾 Simpan Data

                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- FOOTER --}}
                    <div class="card-footer bg-white border-top text-center py-4">

                        <small class="text-muted">
                            Sistem Informasi Fakultas
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

        .card{
            background:#fff;
        }

    </style>

</x-layout>