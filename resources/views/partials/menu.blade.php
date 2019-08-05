@if(Admin::user()->visible($item['roles']) && (empty($item['permission']) ?: Admin::user()->can($item['permission'])))
    @if(!isset($item['children']))
        <li>
            @if(url()->isValidUrl($item['uri']))
                <a class="side-menu__item" href="{{ $item['uri'] }}" target="_blank">
            @else
                 <a class="side-menu__item" href="{{ admin_base_path($item['uri']) }}">
            @endif
                <i class="side-menu__icon fa {{$item['icon']}}"></i>
                @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
                    <span class="side-menu__label">{{ __($titleTranslation) }}</span>
                @else
                    <span class="side-menu__label">{{ admin_trans($item['title']) }}</span>
                @endif
            </a>
        </li>
    @else
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa {{ $item['icon'] }}"></i>
                @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
                    <span class="side-menu__label">{{ __($titleTranslation) }}</span>
                @else
                    <span class="side-menu__label">{{ admin_trans($item['title']) }}</span>
                @endif
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                @foreach($item['children'] as $item)
                    <li>
                    @if(url()->isValidUrl($item['uri']))
                        <a href="{{ $item['uri'] }}" class="side-menu__item" target="_blank">
                    @else
                        <a href="{{ admin_base_path($item['uri']) }}" class="side-menu__item">                        
                    @endif
                    
                    @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
                        {{ __($titleTranslation) }}
                    @else
                        {{ admin_trans($item['title']) }}
                    @endif
                    </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
@endif