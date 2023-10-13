<?php

namespace App\Http\Controllers;

use App\Form;
use App\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Form $form)
    {
        $submissions = $form->submissions;
        return view('submissions.index', compact('submissions'));
    }

    public function show(Form $form, Submission $submission)
    {
        // Load the submitted data
        $submission->load('data');

        return view('submissions.show', compact('form', 'submission'));
    }

    public function store(Request $request)
    {
        // Assuming you have a form to submit
        // You'll need to validate and store the submitted data in a separate "SubmissionData" model.

        // After saving the submission data, associate it with the form and store the submission in the "submissions" table.
        $submission = new Submission();
        $submission->form_id = $formId; // Set the form ID to associate the submission with a form
        $submission->save();

        return redirect()->route('form.submit.success')->with('success', 'Form submitted successfully');
    }
}
