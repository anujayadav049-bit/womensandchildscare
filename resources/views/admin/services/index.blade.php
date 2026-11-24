@extends('layouts.admin') {{-- Tumhara admin layout - agar alag naam hai to badal dena --}}

@section('content')
<div class="container py-4">
  <h2>Services - Edit Pages</h2>
  @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

  <ul class="nav nav-tabs" id="tab">
    @foreach($services as $slug => $s)
      <li class="nav-item"><button class="nav-link {{ $loop->first?'active':'' }}" data-bs-toggle="tab" data-bs-target="#tab-{{ $slug }}">{{ $s['label'] }}</button></li>
    @endforeach
  </ul>

  <div class="tab-content mt-3">
    @foreach($services as $slug => $s)
    @php $p = $s['prefix']; $data = $pages[$slug]->data ?? []; @endphp
    <div class="tab-pane fade {{ $loop->first?'show active':'' }}" id="tab-{{ $slug }}">
      <form action="{{ route('admin.services.update', $slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          @foreach(\App\Http\Controllers\Admin\ServicePageController::fields($p) as $key => $label)
          @php $field = $p.'_'.$key; $isImage = str_contains($key,'image') || $key=='banner'; @endphp
          <div class="col-md-6 mb-3">
            <label class="form-label"><b>{{ $label }}</b></label>
            @if($isImage)
              @if(!empty($data[$field]))<br><img src="{{ asset($data[$field]) }}" style="height:80px" class="mb-2"><br>@endif
              <input type="file" name="{{ $field }}" class="form-control">
            @elseif(str_contains($key,'_p') || str_contains($key,'support_text') || str_contains($key,'_a'))
              <textarea name="{{ $field }}" rows="3" class="form-control">{{ $data[$field] ?? '' }}</textarea>
            @else
              <input type="text" name="{{ $field }}" value="{{ $data[$field] ?? '' }}" class="form-control">
            @endif
          </div>
          @endforeach
        </div>
        <button class="btn btn-success btn-lg">Save {{ $s['label'] }}</button>
      </form>
    </div>
    @endforeach
  </div>
</div>
@endsection