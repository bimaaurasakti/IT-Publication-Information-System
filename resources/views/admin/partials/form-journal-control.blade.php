@csrf
<div class="form-group">
    <label for="title"><h5>Title</h5></label>
    <input type="text" name="title" value="{{ old('title') ?? $journal->title }}" id="title" class="form-control" autofocus>
</div>
@error('title')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="area"><h5>Area</h5></label>
    <input type="text" name="area" value="{{ old('area') ?? $journal->area }}" id="area" class="form-control">
</div>
@error('area')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="score"><h5>Score</h5></label>
    <input type="text" name="score" value="{{ old('score') ?? $journal->score }}" id="score" class="form-control">
</div>
@error('score')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="institute"><h5>Institute</h5></label>
    <input type="text" name="institute" value="{{ old('institute') ?? $journal->institute }}" id="institute" class="form-control">
</div>
@error('institute')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="publisher"><h5>Publisher</h5></label>
    <input type="text" name="publisher" value="{{ old('publisher') ?? $journal->publisher }}" id="publisher" class="form-control">
</div>

<div class="form-group">
    <label for="link_website"><h5>Website</h5></label>
    <input type="text" name="link_website" value="{{ old('link_website') ?? $journal->link_website }}" id="link_website" class="form-control">
</div>
@error('link_website')
    @include('admin.partials.error-message')
@enderror

<div class="form-group">
    <label for="address"><h5>Address</h5></label>
    <textarea name="address" id="address" class="form-control">{{ old('address') ?? $journal->address }}</textarea>
</div>

<div class="form-group">
    <label for="district"><h5>District</h5></label>
    <input type="text" name="district" value="{{ old('district') ?? $journal->district }}" id="district" class="form-control">
</div>

<div class="form-group">
    <label for="email"><h5>Email</h5></label>
    <input type="text" name="email" value="{{ old('email') ?? $journal->email }}" id="email" class="form-control">
</div>

<div class="form-group">
    <label for="phone"><h5>Phone</h5></label>
    <input type="text" name="phone" value="{{ old('phone') ?? $journal->phone }}" id="phone" class="form-control">
</div>

<div class="form-group">
    <label for="photo"><h5>File JPG, PNG, JPEG</h5></label>
    <input type="file" name="photo" id="photo" class="form-control">
</div>

<div class="form-group pull-right">
    <input type="submit" name="add" value="{{ $action == 'add' ? 'Add' : 'Edit' }}" class="btn btn-success">
</div>

<div class="form-group pull-right">
    <input type="delete" name="add" value="Delete" class="btn btn-success">
</div>