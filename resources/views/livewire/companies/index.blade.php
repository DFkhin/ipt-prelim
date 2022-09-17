<div>
    <table class="table table-striped shadow border border-primary">
        <thead class="header bg-dark" style="color: rgb(255, 255,255)">
            <tr>
                <th>ID No</th>
                <th>Company Name</th>
                <th>Branches</th>
                <th>Description</th>
                <th>Country</th>
                <th>Rating</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td class="bg-white">{{ $company->id }}</td>
                    <td class="bg-white">{{ $company->company_name }}</td>
                    <td class="bg-white">{{ $company->branches }}</td>
                    <td class="bg-white">{{ $company->description }}</td>
                    <td class="bg-white">{{ $company->country }}</td>
                    <td class="bg-white">{{ $company->rating }}</td>
                    <td class="bg-white">
                        <a href="{{ url('edit', ['company' => $company->id]) }}" class="btn btn-success border-warning" id="ic" title="Edit">Edit</a>
                    </td>
                    <td class="bg-white">
                        <a href="{{ url('delete', ['company' => $company->id]) }}" class="btn btn-danger border-warning" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>

</style>
