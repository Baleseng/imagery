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


      <h1>Create New Invoice</h1>
    
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="col-md-6">
                <label for="customer_email" class="form-label">Customer Email</label>
                <input type="email" class="form-control" id="customer_email" name="customer_email" required>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="customer_address" class="form-label">Customer Address</label>
            <textarea class="form-control" id="customer_address" name="customer_address" rows="3" required></textarea>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="invoice_date" class="form-label">Invoice Date</label>
                <input type="date" class="form-control" id="invoice_date" name="invoice_date" required>
            </div>
            <div class="col-md-6">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" required>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea class="form-control" id="notes" name="notes" rows="2"></textarea>
        </div>
        
        <h4>Invoice Items</h4>
        <div id="items-container">
            <div class="item row mb-3">
                <div class="col-md-5">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="items[0][description]" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="items[0][quantity]" min="1" value="1" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Unit Price</label>
                    <input type="number" step="0.01" class="form-control" name="items[0][unit_price]" min="0" required>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-item">Remove</button>
                </div>
            </div>
        </div>
        
        <button type="button" id="add-item" class="btn btn-secondary mb-3">Add Item</button>
        
        <button type="submit" class="btn btn-primary">Create Invoice</button>
    </form>
    
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('items-container');
            const addButton = document.getElementById('add-item');
            let itemCount = 1;
            
            addButton.addEventListener('click', function() {
                const newItem = document.createElement('div');
                newItem.className = 'item row mb-3';
                newItem.innerHTML = `
                    <div class="col-md-5">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="items[${itemCount}][description]" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="items[${itemCount}][quantity]" min="1" value="1" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Unit Price</label>
                        <input type="number" step="0.01" class="form-control" name="items[${itemCount}][unit_price]" min="0" required>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-item">Remove</button>
                    </div>
                `;
                container.appendChild(newItem);
                itemCount++;
            });
            
            container.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-item')) {
                    if (container.querySelectorAll('.item').length > 1) {
                        e.target.closest('.item').remove();
                    } else {
                        alert('At least one item is required.');
                    }
                }
            });
        });
    </script>
    @endpush


    
    </div>
</div>

@endsection

