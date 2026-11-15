<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactEnquiryController extends Controller
{
    /**
     * Handle an incoming project consultation and enquiry submission.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'whatsapp' => ['required', 'string', 'max:50'],
            'location' => ['required', 'string', 'max:150'],
            'project_type' => ['nullable', 'string', 'max:100'],
            'property_type' => ['nullable', 'string', 'max:150'],
            'space_size' => ['nullable', 'string', 'max:150'],
            'budget' => ['nullable', 'string', 'max:150'],
            'commencement_date' => ['nullable', 'date'],
            'consultation_type' => ['required', 'string', 'in:in_person,online'],
            'vision' => ['required', 'string', 'max:5000'],
            'attachments' => ['nullable', 'array', 'max:5'],
            'attachments.*' => ['file', 'mimes:jpg,jpeg,png,webp,pdf', 'max:10240'],
        ]);

        return back()->with(
            'enquiry_submitted',
            'Thank you, '.$validated['full_name'].'. Your project enquiry has been received by CasaVee Interiors. Our team will review your vision and be in touch shortly.'
        );
    }
}
