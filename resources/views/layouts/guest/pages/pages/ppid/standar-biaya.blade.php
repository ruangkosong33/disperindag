@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Standar Biaya'])
@endsection

@section('content')
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Standar Biaya</h1>
                    <div class="accordion " id="accordionExample">
                        @forelse($items as $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $item->id }}" aria-expanded="true"
                                        aria-controls="collapse-{{ $item->id }}">
                                        {{ $item->title }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $item->description !!}
                                    </div>
                                </div>
                            </div>
                        @empty
                            Tidak ada data
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
