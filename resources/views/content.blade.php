@extends('admin::index', ['header' => $header])

@section('content')
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ $header ?: trans('admin.title') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $description ?: trans('admin.description') }}</li>
        </ol>

        <!-- breadcrumb start -->
        @if ($breadcrumb)
        <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            @foreach($breadcrumb as $item)
                @if($loop->last)
                    <li class="active">
                        @if (\Illuminate\Support\Arr::has($item, 'icon'))
                            <i class="fa fa-{{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['text'] }}
                    </li>
                @else
                <li>
                    <a href="{{ admin_url(\Illuminate\Support\Arr::get($item, 'url')) }}">
                        @if (\Illuminate\Support\Arr::has($item, 'icon'))
                            <i class="fa fa-{{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['text'] }}
                    </a>
                </li>
                @endif
            @endforeach
        </ol>
        @elseif(config('admin.enable_default_breadcrumb'))
        <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>   
            @for($i = 2; $i <= count(Request::segments()); $i++)
                <li>
                {{ucfirst(Request::segment($i))}}
                </li>
            @endfor
        </ol>
        @endif

        <!-- breadcrumb end -->

    

        <div class="section-body">

            @include('admin::partials.alerts')
            @include('admin::partials.exception')
            @include('admin::partials.toastr')

            {!! $content !!}

        </div>
    </section>
@endsection