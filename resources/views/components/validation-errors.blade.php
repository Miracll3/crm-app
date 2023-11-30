@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-bold text-dark fs-16">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-dark fs-14">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
