@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $conference->name }}" id="name" class="form-control" autofocus>
</div>
@error('name')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="long_name">Full Name</label>
    <input type="text" name="long_name" value="{{ old('long_name') ?? $conference->long_name }}" id="long_name" class="form-control">
</div>
@error('long_name')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="area">Area</label>
    <input type="text" name="area" value="{{ old('area') ?? $conference->area }}" id="area" class="form-control">
</div>
@error('area')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="organizer">Organizer</label>
    <input type="text" name="organizer" value="{{ old('organizer') ?? $conference->organizer }}" id="organizer" class="form-control">
</div>

<div class="form-group">
    <label for="link_website">Link Website</label>
    <input type="text" name="link_website" value="{{ old('link_website') ?? $conference->link_website }}" id="link_website" class="form-control">
</div>
@error('link_website')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" value="{{ old('location') ?? $conference->location }}" id="location" class="form-control">
</div>
@error('location')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" value="{{ old('date') ?? $conference->date }}" id="date" class="form-control">
</div>
@error('date')
    @include('admin.partials.error-message')
@enderror

<div class="form-group pull-right">
    <input type="submit" name="add" value="{{ $action == 'add' ? 'Add' : 'Edit' }}" class="btn btn-success">
</div>