<x-layout>
    <div class="container mt-4">
        <div class="card shadow-sm">
            
            <div class="card-header">
                <h4 class="mb-0">Detail Fakultas</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered align-middle mb-0">
                    <tbody>
                        <tr>
                            <th width="30%">Nama Fakultas</th>
                            <td width="5%">:</td>
                            <td>
                                {{ $fakulta->nama_fakultas ?? '-' }}
                            </td>
                        </tr>

                        <tr>
                            <th>Nama Dekan</th>
                            <td>:</td>
                            <td>
                                {{ $fakulta->nama_dekan ?? '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-3">
                    <a href="/fakultas" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-layout>