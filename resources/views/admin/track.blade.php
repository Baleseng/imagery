@extends('layouts.admin')

@section('description', '')
@section('keywords', '')

@section('title',  '')


@section('content')

<div class="container-fluid" style="position: relative; top:3rem;">
  <div class="row justify-content-center">
    <h1>Tracking Data</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Event Type</th>
                    <th>Page URL</th>
                    <th>Button ID</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tracks as $track)
                    <tr>
                        <td>{{ $track->event_type }}</td>
                        <td>{{ $track->page_url }}</td>
                        <td>{{ $track->button_id }}</td>
                        <td>{{ $track->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
