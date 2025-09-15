<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewApplication extends Component
{

    use WithFileUploads;

    public $vacancy;
    public $fields;
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $gender;
    public $email;
    public $phone_number;
    public $qualifications;

    public function mount()
    {
        $this->fields = json_decode($this->vacancy->fields);
    }

    public function render()
    {
        return view('livewire.new-application');
    }
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'date_of_birth' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required',
        'qualifications' => 'required',
    ];

    public function submit()
    {



        // $this->validate();

        $fields  = [];

        foreach ($this->fields as $field) {
            if ($field["type"] == "text") {
                $fields[] = $field;
            }else{
                //upload file
                $name = Str::slug($this->first_name. "-" .$this->last_name);
                $filename = $field["value"]->store("uploads/{$this->vacancy->slug}/$name", "public_uploads");

                $fields[]=[
                    "label" => $field["label"],
                    "placeholder" => $field["placeholder"],
                    "type" => $field["type"],
                    "value" => $filename,
                ];
            }
        }

        $date = explode('-', $this->date_of_birth);


        Application::create([
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "date_of_birth" => Carbon::create($date[0], $date[1], $date[2], 0, 0, 0)->getTimestamp(),
            "email" => $this->email,
            "gender" => $this->gender,
            "phone_number" => $this->phone_number,
            "qualifications" => $this->qualifications,
            "fields" => json_encode($fields),
            "vacancy_id" => $this->vacancy->id,
        ]);

        return Redirect::route("vacancies")->with("success", "Your application has been submitted!");
    }
}
