@extends('layouts.app')

@section('content')

<div class="container">
    @include('alerts.all')
</div>


<div class="container">
    
   

    
</div>

@endsection

@push('scripts')
<script>
    $(function() {

        $('#select-province-id').change(function() {
            filterOptions($(this).val(), '#select-district-id option', 'province-id');
        });

    });

</script>

@endpush
