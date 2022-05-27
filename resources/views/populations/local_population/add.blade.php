@extends('layouts.app')

@section('content')

<div class="container">
    @include('alerts.all')
</div>


<div class="container">
    
    <div class="card z-depth-0">
        <div class="col-12">
            <label for="" class="col-12 text-center h3 my-4">स्थानिय तह को जनसंख्या </label>
            <hr>
        </div>
        <div class="card-body">
          
            <form action="" method="POST" class="form">
                @csrf
                @isset($municipality->id)
                @method('put')
                @endisset
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="input-name">जिल्ला को नाम</label>
                        <select name="district_name" class="form-control" id="">
                            {{-- @foreach() --}}
                            <option value="" data-province-id=""></option>
                            {{-- @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input-name">न.पा./गा.वि.स. को नाम</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name ">घरपरिवार संख्या</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name">पुरुष</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name">महिला</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name">औषत घरपरिवार सदस्य संख्या</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name">लैगिंक अनुपात</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name">महिला साक्षरता (प्रतिशत)</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input-name">पुरुष साक्षरता (प्रतिशत)</label>
                        <input type="text" id="input-name" name="name" class="form-control" autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success z-depth-0">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="my-4"></div>

    
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
