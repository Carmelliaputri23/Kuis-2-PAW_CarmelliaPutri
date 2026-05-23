<x-layout>

    <div class="container mt-4">

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- HEADER --}}
                    <div class="bg-white border-bottom p-5 text-center">

                        <div class="mb-3">

                            <div class="detail-icon mx-auto">

                                📘

                            </div>

                        </div>

                        <h2 class="fw-bold text-dark mb-2">
                            Detail Program Studi
                        </h2>

                        <p class="text-muted mb-0">
                            Informasi lengkap data program studi
                        </p>

                    </div>


                    {{-- BODY --}}
                    <div class="card-body p-5 bg-white">

                        {{-- ITEM --}}
                        <div class="detail-item">

                            <div class="detail-label">
                                Nama Prodi
                            </div>

                            <div class="detail-value">
                                {{ $prodi->nama_prodi }}
                            </div>

                        </div>


                        {{-- ITEM --}}
                        <div class="detail-item">

                            <div class="detail-label">
                                Nama Kaprodi
                            </div>

                            <div class="detail-value">
                                {{ $prodi->nama_kaprodi }}
                            </div>

                        </div>


                        {{-- ITEM --}}
                        <div class="detail-item border-0 pb-0">

                            <div class="detail-label">
                                Alias Prodi
                            </div>

                            <div class="detail-value">

                                <span class="custom-badge">

                                    {{ $prodi->alias_prodi }}

                                </span>

                            </div>

                        </div>


                        {{-- BUTTON --}}
                        <div class="d-flex flex-wrap gap-3 mt-5">

                            <a href="{{ route('prodi.index') }}"
                               class="btn btn-light border rounded-4 px-4 py-3 fw-semibold flex-fill">

                                ← Kembali

                            </a>


                            <a href="{{ route('prodi.edit', $prodi->id) }}"
                               class="btn btn-dark rounded-4 px-4 py-3 fw-semibold flex-fill">

                                ✏ Edit Data

                            </a>

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

        </div>

    </div>


    {{-- STYLE --}}
    <style>

        .detail-icon{
            width:80px;
            height:80px;
            border-radius:24px;
            background:#f3f4f6;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:35px;
        }

        .detail-item{
            padding:24px 0;
            border-bottom:1px solid #f1f5f9;
        }

        .detail-label{
            font-size:14px;
            color:#6b7280;
            margin-bottom:8px;
            font-weight:600;
        }

        .detail-value{
            font-size:20px;
            font-weight:700;
            color:#111827;
        }

        .custom-badge{
            background:#f3f4f6;
            color:#111827;
            padding:12px 18px;
            border-radius:14px;
            font-size:14px;
            font-weight:700;
            display:inline-block;
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