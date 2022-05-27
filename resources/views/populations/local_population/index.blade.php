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
                            <option value="">जिल्ला छान्नुहोस्</option>
                            @foreach($district as $item)
                            <option value="{{$item->name}}" data-province-id="">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input-name">न.पा./गा.वि.स. को नाम</label>
                        <select name="municipality_name" class="form-control" id="">
                            <option value="">न.पा./गा.पा छान्नुहोस्</option>
                            @foreach($municipality as $item)
                            <option value="{{$item->name}}" data-province-id="">{{$item->name}}</option>
                            @endforeach
                        </select>
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
   

    <div class="my-4"></div>

    <div class="card z-depth-0">
        <div class="card-header">
            <h1 class="h3-responsive d-inline-block">न.पा./गा.वि.स. हरु</h1>
            {{-- <small>(हाल {{ count($municipalities)  }}  न.पा./गा.वि.स. {{ count($municipalities) > 1 ? 'हरु छन्' : 'छ' }} )</small> --}}
            
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>क्र.स.</th>
                        <th>न.पा./गा.वि.स.</th>
                        <th>न.पा./गा.वि.स. को छेत्रफल</th>
                        <th>न.पा./गा.वि.स. वार्ड सांख्य</th>
                        <th>जिल्ला</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($municipalities as $municipality)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $municipality->name }}</td>
                        <td>{{ $municipality->area }}</td>
                        <td>{{ $municipality->number }}</td>
                        <td>{{ $municipality->district->name ?? '' }}</td>
                        <td>
                            <a class="action-btn text-primary" href="{{ route('municipality.edit', $municipality) }}"><i class="far fa-edit"></i></a>
                            <form action="{{ route('municipality.destroy', $municipality) }}" method="post" onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')" class="form-inline d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr class="text-center font-italic">
                        <td colspan="10">* * डाटाबेसमा कुनै डाटा छैन * *</td>
                    </tr>
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
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
