<?php

namespace App\Http\Controllers;

use App\Models\ProgramRegistration;
use Illuminate\Http\Request;

class WomenInTechController extends Controller
{
    // Show the details form
    public function showRegistrationForm()
    {
        return view('women-in-tech.register');
    }

    // Save the details form and redirect to document upload
    public function storeDetails(Request $request)
    {
        $request->validate([
            'full_names'  => 'required|string|max:255',
            'surname'     => 'required|string|max:255',
            'cell_number' => 'required|string|max:20',
            'id_number'   => 'required|string|max:20',
            'age'         => 'required|integer|min:16',
            'address'     => 'required|string|max:255',
        ]);

        // Save the registration details linked to the authenticated user
        $registration = new ProgramRegistration();
        $registration->user_id    = auth()->id();
        $registration->full_names = $request->full_names;
        $registration->surname    = $request->surname;
        $registration->cell_number = $request->cell_number;
        $registration->id_number   = $request->id_number;
        $registration->age         = $request->age;
        $registration->address     = $request->address;
        $registration->save();

        return redirect()->route('womenintech.documents');
    }

    // Show the document upload form
    public function showDocumentUploadForm()
    {
        return view('women-in-tech.documents');
    }

    // Save the uploaded documents
    public function storeDocuments(Request $request)
    {
        $request->validate([
            'id_document'       => 'required|file|mimes:pdf,png,jpg,docx|max:2048',
            'proof_of_address'  => 'required|file|mimes:pdf,png,jpg,docx|max:2048',
        ]);

        // Get the registration record for the current user
        $registration = ProgramRegistration::where('user_id', auth()->id())->firstOrFail();

        // Save ID Document
        if ($request->hasFile('id_document')) {
            $idDocPath = $request->file('id_document')->store('documents/id_document', 'public');
            $registration->id_document = $idDocPath;
        }

        // Save Proof of Address
        if ($request->hasFile('proof_of_address')) {
            $proofPath = $request->file('proof_of_address')->store('documents/proof_of_address', 'public');
            $registration->proof_of_address = $proofPath;
        }

        $registration->status = 'pending'; // Set status to pending
        $registration->save();

        return redirect()->route('dashboard')->with('status', 'Your application has been submitted.');
    }
}
