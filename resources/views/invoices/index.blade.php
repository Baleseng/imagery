@extends('layouts.app')

@section('description', '')
@section('keywords', '')


@section('title',  'Invoice System')
      

@section('content')

<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
             <h1>Invoices</h1>
      <a href="{{ route('invoices.create') }}" class="btn btn-primary mb-3">Create New Invoice</a>
      
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Invoice #</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Total</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($invoices as $invoice)
                  <tr>
                      <td>{{ $invoice->invoice_number }}</td>
                      <td>{{ $invoice->customer_name }}</td>
                      <td>{{ $invoice->invoice_date->format('m/d/Y') }}</td>
                      <td>${{ number_format($invoice->total, 2) }}</td>
                      <td>
                          <a href="{{ route('invoices.show', $invoice->id) }}" class="btn btn-sm btn-info">View</a>
                          <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-sm btn-warning">Edit</a>
                          <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
</div>

@endsection

