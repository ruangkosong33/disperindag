<div class="col-12 col-md-12 order-md-0">'
    <div class="result_content">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">JUDUL</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $k)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration + ($items->currentPage() - 1) * $items->perPage() }}</td>
                            <td><a href="{{ route($route, $k->slug) }}">{{ $k->title }}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route($route, $k->slug) }}">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $items->links() }}
    </div>
</div>
