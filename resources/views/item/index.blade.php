<x-layouts.master>
    <livewire:components.items/>
    @push('vendor_style')
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/choices/css/choices.min.css')}}">
    @endpush
    @push('vendor_script')
        <!-- Vendors -->
        <script src="{{asset('assets/vendor/choices/js/choices.min.js')}}"></script>
    @endpush

</x-layouts.master>




