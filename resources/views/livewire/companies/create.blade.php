<div>
    <body>
    <div class="card border border-primary">
        <div class="card-header bg-dark">
            <h3 class="mt-2" style="margin-left: 100px; color: rgb(255,255,255)">Add Company</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="company_name">
                <label for="company_name">Company Name</label>
                @error('company_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="branches">
                <label for="branches">Branches</label>
                @error('branches')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="description">
                <label for="description">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="country">
                <label for="country">Country</label>
                @error('country')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="rating">
                <label for="rating">Rating</label>
                @error('rating')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary border-warning" style="margin-right: 130px; " wire:click="addCompany()">
                    Add Company
                </button>
            </div>
        </div>
    </div>
</body>
</div>
<style>
    body{
    background-image: url("images/background.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>