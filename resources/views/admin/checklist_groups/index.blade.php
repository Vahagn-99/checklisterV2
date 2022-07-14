@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card-body" bis_skin_checked="1">
                        
                        <div class="table-responsive" bis_skin_checked="1">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">{{ __('Id') }}</th>
                                        <th class="border-0">{{ __('name') }}</th>
                                        <th class="border-0">{{ __('created in') }}</th>
                                        <th class="border-0">{{ __('checkilsts count') }}</th>
                                        <th class="border-0 text-center">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($checklists_groups ?? [] as $group)
                                        <tr>
                                            <td class="border-0 fw-bold">{{ $group->id }}</td>
                                            <td class="border-0">{{ $group->name }}</td>
                                            <td class="border-0 fw-bold">{{ $group->created_at }}</td>
                                            <td class="border-0 fw-bold">{{ $group->checklsits_count }}</td>
                                            <td class="border-0 fw-bold text-center">
                                                <div class="card-body p-0 d-inline-flex align-items-center">
                                                    <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"
                                                        style="    margin-right: 3px;"
                                                        href="{{ route('admin.checklists_groups.edit', $group) }}"><svg
                                                            class="icon icon-xs me-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                            </path>
                                                        </svg> {{ __('Edit') }} </a>
                                                    <form id="delete-form"
                                                        action="{{ route('admin.checklists_groups.destroy', $group) }}"
                                                        method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-sm btn-secondary"
                                                            onclick="return confirm('Are you sure ?')"
                                                            type="submit">{{ __('Delete') }}</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
