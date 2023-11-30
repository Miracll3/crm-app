@if ($errors->any())
    <div class="alert mb-4 alert-error" role="alert">
        <div class="row">
            <div class="col-2 d-flex">
                <span class="m-auto">
                    <i class="bi bi-exclamation-circle fs-1"></i>
                </span>
            </div>
            <div class="col">
                <x-validation-errors class="text-dark fw-400" />
                @if (session('status'))
                <div class="text-brown fs-13 fw-500">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endif