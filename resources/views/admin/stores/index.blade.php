@extends('layouts.app')

@section('content')
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Loja</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $stores->links() }}
@endsection
