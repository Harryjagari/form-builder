<?php
namespace App\Http\Controllers;

use App\Models\FormField;
use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function index()
    {
        $formFields = FormField::all();
        // Add the following line for debugging
  
        return view('forms.index', ['formFields' => $formFields]);
    }

    public function create()
    {
        return view('forms.view');
    }

    public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new form
        $form = Form::create($validatedData);

        // Redirect to the form builder or a view where you add form fields
        return redirect()->route('forms.edit', $form->id);
    }

    public function edit(Form $form)
    {
        // Load the form and its fields
        $form->load('fields');

        return view('forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        // Update form information
        $form->update($request->only(['name']));

        return redirect()->route('forms.edit', $form->id)->with('success', 'Form updated successfully');
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('forms.index')->with('success', 'Form deleted successfully');
    }
}
