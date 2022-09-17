<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;
use App\Models\Company;

class Index extends Component
{

    public function loadCompanies() {
        $companies = Company::orderBy('company_name')->get();

        return compact('companies');
    }

    public function render()
    {
        return view('livewire.companies.index', $this->loadCompanies());
    }
}
