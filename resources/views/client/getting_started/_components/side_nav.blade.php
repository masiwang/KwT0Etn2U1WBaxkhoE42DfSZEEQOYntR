<ul style="padding-left: 0">
    @if ($user->getting_started_level == 0)
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none">
    @else
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none getting-started-disable">
    @endif
        <span class="badge bg-success d-flex align-items-center mr-2 p-2"><i class="far fa-envelope"></i></span>
        <p class="d-flex align-items-center h-100 mb-0 text-dark" style="line-height: 1.8rem">Konfirmasi Email</p>
    </a>

    @if ($user->getting_started_level == 1)
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none">
    @else
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none getting-started-disable">
    @endif
        <span class="badge bg-success d-flex align-items-center mr-2 p-2"><i class="far fa-address-card"></i></span>
        <p class="d-flex align-items-center h-100 mb-0 text-dark" style="line-height: 1.8rem">Informasi umum</p>
    </a>

    @if ($user->getting_started_level == 2)
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none">
    @else
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none getting-started-disable">
    @endif
        <span class="badge bg-success d-flex align-items-center mr-2 p-2"><i class="fas fa-map-marked-alt"></i></span>
        <p class="d-flex align-items-center h-100 mb-0 text-dark" style="line-height: 1.8rem">Alamat</p>
    </a>

    @if ($user->getting_started_level == 3)
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none">
    @else
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none getting-started-disable">
    @endif
        <span class="badge bg-success d-flex align-items-center mr-2 px-2"><i class="fas fa-id-card"></i></span>
        <p class="d-flex align-items-center h-100 mb-0 text-dark" style="line-height: 1.8rem">KTP</p>
    </a>

    @if ($user->getting_started_level == 4)
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none">
    @else
    <a href="#" class="d-flex flex-row mb-3 text-decoration-none getting-started-disable">
    @endif
        <span class="badge bg-success d-flex align-items-center mr-2 px-2"><i class="far fa-handshake"></i></span>
        <p class="d-flex align-items-center h-100 mb-0 text-dark" style="line-height: 1.8rem">Persetujuan</p>
    </a>
</ul>