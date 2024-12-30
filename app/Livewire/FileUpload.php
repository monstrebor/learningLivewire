<?php

namespace App\Livewire;

use App\Models\UploadFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;

    #[Rule('file|mimes:pdf,doc,docx|max:2048')]
    public $file;

    public $path;

    public $downloads;

    public function render()
    {
        return view('livewire.file-upload');
    }

    public function mount()
    {
        $this->downloads = UploadFile::all();
    }

    public function save()
    {
        $this->validate();
        $this->path = $this->file->store('myFiles');

        UploadFile::create([
            'name' => $this->name,
            'path' => $this->path,
        ]);

        session()->flash('status', 'File uploaded succesfully');

        return $this->redirect('file-upload',navigate:true);
    }

    public function downloadFile(UploadFile $uploadFile)
    {
        if(Storage::disk('local')->exists($uploadFile->path)){
            session()->flash('status','file is downloading');
            return Storage::download($uploadFile->path,$uploadFile->name);
        }
        session()->flash('status','file not found');
    }
}
