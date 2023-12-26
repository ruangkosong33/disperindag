@php
    $colors = ['#316650', '#F44611', '#00BB2D', '#CF3476', '#102C54', '#898176', '#FE0000', '#1C1C1C', '#8E402A', '#C93C20'];
@endphp

@push('style')
    @php
        $no = 1;
    @endphp
    @foreach ($items as $produk)
        <style>
            .counter-year-<?php echo $no; ?>:before {
                content: "";
                background: <?php echo $colors[rand(0, 9)]; ?>;
                border-radius: 15px 0 30px 0;
                box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.15);
                position: absolute;
                top: 12px;
                left: 12px;
                right: 12px;
                bottom: 27px;
                z-index: -1;
            }
        </style>
        @php
            $no++;
        @endphp
    @endforeach
@endpush

<div class="row py-5">
    <div class="col-12 py-4">
        <h4 class="text-center">Pilih Tahun</h4>
    </div>
    @php
        $n = 1;
    @endphp
    @foreach ($items as $produk)
        <div class="col-md-3 col-sm-6">
            <div class="counter-year counter-year-{{ $n }}">
                <div class="counter-icon">
                    <a href="{{ route($route, $produk->year) }}">
                        <i class="fa fa-folder"></i>
                    </a>
                </div>
                <h3>{{ $produk->year }}</h3>
                {{-- <span class="counter-value">{{ $produk->jumlah }}</span> --}}
            </div>
        </div>
        @php
            $n++;
        @endphp
    @endforeach
</div>

@push('script')
    <script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
@endpush
