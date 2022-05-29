@extends('layouts.app')

@section('content')

<div class="container">
    @include('alerts.all')
</div>
<div class="container">
    <div class="card z-depth-0">
        <div class="card-body">
            <form action="{{route('feeder-hostel.store')}}" method="POST" class="form">
                @csrf
                <div class="form-group">
                    <label for="select-province-id">प्रदेशको नाम</label>
                    <select id="select-province-id" class="custom-select">
                        
                        <option value="">प्रदेश छान्नुहोस्</option>
                        @foreach($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select-district-id">जिल्लाको नाम</label>
                    <select name="district_id" id="select-district-id" class="custom-select">
                        <option value="">जिल्ला छान्नुहोस्</option>
                        @foreach($provinces as $province)
                        @foreach($province->districts as $district)
                        <option value="{{ $district->id }}" data-province-id="{{ $province->id }}">{{ $district->name }}</option>
                        @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>न.पा./गा.वि.स.</label>
                    <select name="municipality_id" class="custom-select">
                        <option value="">न.पा./गा.वि.स. छान्नुहोस्</option>
                        @foreach ($municipalities as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-name">विद्यालयको नाम</label>
                    <input type="text" id="input-name" name="school_name" class="form-control" autocomplete="off" value="">
                </div>
                <div class="form-group">
                    <label for="input-name">जिल्ला कोटा</label>
                    <input type="text" id="input-name" name="quota" class="form-control" autocomplete="off" value="">
                </div>
                <div class="form-group">
                    <label for="input-name">हाल अध्ययनरत विद्यार्थी संख्या</label>
                    <input type="text" id="input-name" name="student_number" class="form-control" autocomplete="off" value="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success z-depth-0">सेभ गर्नुहोस्</button>
                </div>
            </form>
        </div>
    </div>

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
                    @forelse ($feederhostels as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $municipality->name }}</td>
                        <td>{{ $item->area }}</td>
                        <td>{{ $item->number }}</td>
                        <td>{{ $item->district->name ?? '' }}</td>
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
                    @endforelse
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
