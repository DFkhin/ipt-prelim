<div>
<body>
    <div class="card shadow border border-primary">
        <div class="card-header bg-dark">
            <h5 class="text-white text-center mt-2">Are you sure you want to delete ?</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th >
                        Company Name
                    </th>
                    <td>
                        {{ $this->company->company_name }}
                    </td>
                </tr>
                <tr>
                <tr>
                    <th >
                        Branches
                    </th>
                    <td>
                        {{ $this->company->branches }}
                    </td>
                </tr>
                    <th >
                        Description
                    </th>
                    <td>
                        {{ $this->company->description }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Country
                    </th>
                    <td>
                        {{ $this->company->country }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Rating
                    </th>
                    <td>
                        {{ $this->company->rating }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger border-warning" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-secondary mx-2 border-warning" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</body>
</div>
<style>
     body {
        height: 100%;
        background-image: url("images/background.jpeg");
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
