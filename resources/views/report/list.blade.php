@extends('layouts.main')

@section('title', 'Lista sprawozdań')

@section('content')

    <div class="card mt-3">
        <div class="card">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Lista sprawozdań</div>
            <div class="card-body">
                @if (!empty($when))
                    <form class="form-inline" action="{{ route('ministry.list') }}">
                        <div class="form-row">
                            <label class="my-1 mr-2" for="when">Wybierz miesiąc:</label>
                            <div class="col">
                                <input type="month" class="form-control" name="when" placeholder=""
                                    value="{{ $when ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary mb-1">Wyszukaj</button>
                        </div>
                    </form>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="align-middle">Lp</th>
                                <th class="align-middle">Z kim</th>
                                <th class="align-middle">Typ</th>
                                <th class="align-middle">Kiedy</th>
                                <th class="align-middle">Godziny</th>
                                <th class="align-middle">Publikacje</th>
                                <th class="align-middle">Filmy</th>
                                <th class="align-middle">Odwiedziny</th>
                                <th class="align-middle">Studia</th>
                                <th class="align-middle">Opcje</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="align-middle">Lp</th>
                                <th class="align-middle">Z kim</th>
                                <th class="align-middle">Typ</th>
                                <th class="align-middle">Kiedy</th>
                                <th class="align-middle">Godziny</th>
                                <th class="align-middle">Publikacje</th>
                                <th class="align-middle">Filmy</th>
                                <th class="align-middle">Odwiedziny</th>
                                <th class="align-middle">Studia</th>
                                <th class="align-middle">Opcje</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ministries ?? [] as $ministry)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">
                                        @foreach ($ministry->coworkers as $coworker)
                                            {{ $coworker->name . ' ' . $coworker->surname }}{!! '<br>' !!}
                                        @endforeach
                                    </td>
                                    <td class="align-middle">{{ data_get($ministry, 'types.name') }}</td>
                                    <td class="align-middle">{{ $ministry->when->format('d.m.Y H:i') }}
                                    <td class="align-middle">{{ data_get($ministry, 'reports.hours')->format('H:i') }}</td>
                                    <td class="align-middle">{{ data_get($ministry, 'reports.placements') }}</td>
                                    <td class="align-middle">{{ data_get($ministry, 'reports.videos') }}</td>
                                    <td class="align-middle">{{ data_get($ministry, 'reports.returns') }}</td>
                                    <td class="align-middle">{{ data_get($ministry, 'reports.studies') }}</td>

                                    <td class="align-middle">
                                        <a
                                            href="{{ route('report.edit.form', ['id' => data_get($ministry, 'reports.id')]) }}">Edytuj</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $ministries->links() }}
            </div>
        </div>
    </div>
@endsection
