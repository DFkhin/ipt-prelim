<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;
use App\Models\Company;

class Create extends Component
{
    public $company_name, $branches, $description, $country, $rating;

    public function addCompany() {
        $this->validate([
            'company_name'   =>          ['required', 'string', 'max:255'],
            'branches'       =>          ['required', 'string', 'max:255'],
            'description'    =>          ['required', 'string', 'max:255'],
            'country'        =>          ['required', 'string', 'max:255'],
            'rating'         =>          ['required', 'string', 'max:255'],
        ]);

        Company::create([
            'company_name'   =>      $this->company_name,
            'branches'       =>      $this->branches,
            'description'    =>      $this->description,
            'country'        =>      $this->country,
            'rating'         =>      $this->rating,
        ]);

        return redirect('/company')->with('company', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.companies.create');
    }
}
