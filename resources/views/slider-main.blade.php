
<div class="slider-main" id="slider-main">
    <div id="slider" class="nivoSlider">
        @foreach($sliders as $slider)
            @if($per_slider != null && $loop->index == $per_slider) @break; @endif
            <img src="{{ url('upload/'.$slider->image) }}" alt="" title="#slidecaption{{ $loop->iteration }}"/>
        @endforeach
    </div>
@foreach($sliders as $slider)
    @if($per_slider != null && $loop->index == $per_slider) @break; @endif
    <div id="slidecaption{{ $loop->iteration }}" class="nivo-html-caption">
        <a href="{{ ($slider->read_more) != '' ? $slider->read_more : "/" }}"><h2>{{ $slider->caption }}</h2></a>
        <p>{{ $slider->note }}</p>
        <a class="button class-xem-them" href="#" id="link_2" style="padding: 12px 30px;
        font: 400 15px/22px 'Roboto Condensed', sans-serif;
        text-transform: uppercase;display:
        inline-block;border-radius: 10px;
        background-color: #dd3333;
        color: #ffffff">Xem thêm</a>
    </div>
@endforeach
</div><!-- slider -->