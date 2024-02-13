<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title:</label>
        <input wire:model='title' type="" class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
        @error('title')
        <span class="text-danger">@@{{ $message }}</span>

        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Body:</label>
        <textarea wire:model='body' class="form-control" id="exampleFormControlTextarea1" placeholder="Enter the body"  rows="3"></textarea>
        @error('body')
        <span class="text-danger">@@{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent='store()' class="btn btn-primary">Submit</button>
</form>
