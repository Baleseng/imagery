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
             

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Invoice #{{ $invoice->invoice_number }}</h1>
        <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
    
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>From:</h5>
                    <p>Your Company Name<br>
                    123 Business Street<br>
                    City, State 12345<br>
                    Email: your@company.com</p>
                </div>
                <div class="col-md-6 text-end">
                    <h5>To:</h5>
                    <p>{{ $invoice->customer_name }}<br>
                    {{ $invoice->customer_email }}<br>
                    {{ $invoice->customer_address }}</p>
                </div>
            </div>
            
            <hr>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Invoice Date:</strong> {{ $invoice->invoice_date->format('m/d/Y') }}</p>
                </div>
                <div class="col-md-6 text-end">
                    <p><strong>Due Date:</strong> {{ $invoice->due_date->format('m/d/Y') }}</p>
                </div>
            </div>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoice->items as $item)
                        <tr>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->unit_price, 2) }}</td>
                            <td>${{ number_format($item->amount, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                        <td>${{ number_format($invoice->subtotal, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Tax (10%):</strong></td>
                        <td>${{ number_format($invoice->tax, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                        <td>${{ number_format($invoice->total, 2) }}</td>
                    </tr>
                </tfoot>
            </table>
            
            @if($invoice->notes)
                <div class="mt-3">
                    <h5>Notes:</h5>
                    <p>{{ $invoice->notes }}</p>
                </div>
            @endif
        </div>
    </div>
    
    <div class="d-flex justify-content-between">
        <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning">Edit Invoice</a>
        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Invoice</button>
        </form>
    </div>



    </div>
</div>

@endsection

