@if(session()->has('success'))
<div class="container">
    <div class="d-flex justify-content-center mt-2">
        <div class="col-lg-6">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
</div>
@endif