<?php

namespace App\Http\Livewire\Companies;
use App\Models\Company;
use Livewire\Component;

class Edit extends Component
{

    public $companyId;
    public $company_name, $branches, $description, $country, $rating;
    public function mount() {
        $this->company_name = $this->company->company_name;
        $this->branches = $this->company->branches;
        $this->description = $this->company->description;
        $this->country = $this->company->country;
        $this->ratin = $this->company->rating;

    }

    public function editCompany() {
        $this->validate([
            'company_name'    =>          ['required', 'string', 'max:255'],
            'branches'        =>          ['required', 'string', 'max:255'],
            'description'     =>          ['required', 'string', 'max:255'],
            'country'         =>          ['required', 'string', 'max:255'],
            'rating'          =>          ['required', 'string', 'max:255'],
        ]);

        $this->company->update([
            'company_name'    =>      $this->company_name,
            'branches'        =>      $this->branches,
            'description'     =>      $this->description,
            'country'         =>      $this->country,
            'rating'          =>      $this->rating,
        ]);

        return redirect('/company')->with('company', 'Updated Successfully');
    }

    public function back() {
        return redirect('/company');
    }
    public function getCompanyProperty() {
        return Company::find($this->companyId);
    }

    public function render()
    {
        return view('livewire.companies.edit');
    }
}
