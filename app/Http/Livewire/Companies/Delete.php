<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;
use App\Models\Company;
class Delete extends Component
{

    public $companyId;
    public function getCompanyProperty() {
        return Company::select('id', 'company_name', 'branches', 'description', 'country', 'rating')
            ->find($this->companyId);
    }

    public function delete() {
        $this->company->delete();

        return redirect('/company')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/company');
    }
    public function render()
    {
        return view('livewire.companies.delete');
    }
}
