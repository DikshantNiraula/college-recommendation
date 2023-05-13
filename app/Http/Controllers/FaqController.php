<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->paginate(10);
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        $faq = new Faq();
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->save();

        return redirect()->route('faqs.index')
            ->with('success', 'Faq created successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $validatedData = $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->save();

        return redirect()->route('faqs.index')
            ->with('success', 'Faq updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')
            ->with('success', 'Faq deleted successfully.');
    }
}
